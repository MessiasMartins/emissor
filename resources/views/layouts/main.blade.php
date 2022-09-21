<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!--Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


        <!--Css da aplicação -->
        <link rel="stylesheet" href="/assets/css/styles.css">
        <script src="/assets/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
                <div class="container">
                    <a href="/" class="navbar-brand">
                    <i class="fas fa-blog"></i> &nbsp;
                    Emissor
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Prestadores</a>
                        </li>
                        <li class="nav-item">
                            <a href="/tomadores/index" class="nav-link">Tomadores</a>
                        </li>
                        <li class="nav-item">
                            <a href="/prestadores" class="nav-link">Cadastrar Prestador</a>
                        </li>
                        <li class="nav-item">
                            <a href="/tomadores" class="nav-link">Cadastrar Tomador </a>
                        </li>
                        <li class="nav-item">
                            <a href="/notas" class="nav-link">Cadastrar Nota</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>Emissor &copy; 2022</p>
        </footer>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
