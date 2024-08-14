<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('home')) active @endif" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link @if (request()->routeIs('courses.*')) active @endif"
                        href="{{ route('courses.index') }}">Cursos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link @if (request()->routeIs('students.*')) active @endif"
                        href="{{ route('students.index') }}">Alunos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
