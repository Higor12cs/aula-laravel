<x-app title="Curso #{{ str_pad($course->id, 4, '0', STR_PAD_LEFT) }}">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Curso #{{ str_pad($course->id, 4, '0', STR_PAD_LEFT) }}</h1>

            <div class="d-flex justify-content-center my-4">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Voltar</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $course->name }}" disabled>
                    </div>

                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Editar</a>

                        <form action="{{ route('courses.destroy', $course) }}" method="post"
                            onsubmit="return confirm('Você tem certeza que deseja excluir este curso?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="text-muted">Criado {{ $course->created_at->diffForHumans() }} / Atualizado
                        {{ $course->updated_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
</x-app>
