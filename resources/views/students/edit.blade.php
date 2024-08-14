<x-app title="Editar Aluno #{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Editar Aluno #{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}</h1>

            <div class="d-flex justify-content-center my-4">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Voltar</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('students.update', $student) }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name', $student->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" class="form-control @error('linkedin') is-invalid @enderror"
                                id="linkedin" name="linkedin" value="{{ old('linkedin', $student->linkedin) }}">
                            @error('linkedin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="github" class="form-label">GitHub</label>
                            <input type="text" class="form-control @error('github') is-invalid @enderror"
                                id="github" name="github" value="{{ old('github', $student->github) }}">
                            @error('github')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="course_id" class="form-label">Curso</label>
                            <select class="form-select @error('course_id') is-invalid @enderror" name="course_id">
                                <option value="">-</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" @selected(old('course_id', $student->course_id) == $course->id)>
                                        {{ $course->name }}</option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
