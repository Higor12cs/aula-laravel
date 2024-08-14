<x-app title="Cursos">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Cursos</h1>

            <div class="d-flex justify-content-center my-4">
                <a href="{{ route('courses.create') }}" class="btn btn-primary">Novo Curso</a>
            </div>

            <ul class="list-group">
                @forelse ($courses as $course)
                    <li class="list-group mb-3">
                        <a href="{{ route('courses.show', $course->id) }}"
                            class="list-group-item list-group-item-action">
                            {{ $course->name }}
                        </a>
                    </li>
                @empty
                    <span class="text-center">Nenhum curso cadastrado.</span>
                @endforelse
            </ul>

            {{ $courses->links() }}
        </div>
    </div>
</x-app>
