<x-app title="Alunos">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Alunos</h1>

            <div class="d-flex justify-content-center my-4">
                <a href="{{ route('students.create') }}" class="btn btn-primary">Novo Aluno</a>
            </div>

            <ul class="list-group">
                @forelse ($students as $student)
                    <li class="list-group mb-3">
                        <a href="{{ route('students.show', $student->id) }}"
                            class="list-group-item list-group-item-action">
                            {{ $student->name }} | {{ $student->course?->name }}
                        </a>
                    </li>
                @empty
                    <span class="text-center">Nenhum aluno cadastrado.</span>
                @endforelse
            </ul>

            {{ $students->links() }}
        </div>
    </div>
</x-app>
