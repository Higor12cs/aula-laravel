<x-app title="Editar Curso #{{ str_pad($course->id, 4, '0', STR_PAD_LEFT) }}">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Editar Curso #{{ str_pad($course->id, 4, '0', STR_PAD_LEFT) }}</h1>

            <div class="d-flex justify-content-center my-4">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Voltar</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('courses.update', $course) }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name', $course->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
