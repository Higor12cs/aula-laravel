<x-app title="Aluno #{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Aluno #{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}</h1>

            <div class="d-flex justify-content-center my-4">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Voltar</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $student->name }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin"
                            value="{{ $student->linkedin }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="github" class="form-label">GitHub</label>
                        <input type="text" class="form-control" id="github" name="github"
                            value="{{ $student->github }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="course_id" class="form-label">Curso</label>
                        <select class="form-select" name="course_id" disabled>
                            <option value="">-</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" @selected($student->course_id == $course->id)>{{ $course->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Editar</a>

                        <form action="{{ route('students.destroy', $student) }}" method="post"
                            onsubmit="return confirm('Você tem certeza que deseja excluir este aluno?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="text-muted">Criado {{ $student->created_at->diffForHumans() }} / Atualizado
                        {{ $student->updated_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
</x-app>
