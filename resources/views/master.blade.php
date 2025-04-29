<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title >Portfólio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <h5 class="title mb-0">
                <a href="{{ route('home') }}" class="text-decoration-none">Meu Portfólio</a>
            </h5>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses') }}">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/projetos') }}">Meus Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#about') }}">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#academic') }}">Formação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#experience') }}">Experiências</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#contact') }}">Contatos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="text-center py-3 bg-dark text-white mt-5">
        <p>&copy; 2025 Tais Oliveira</p>
    </footer>
</body>
</html>
