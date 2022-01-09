<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap') }} ">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Document</title>
</head>

<body>

    <div class="header"></div>
    <div class="conteudos">

        <nav class="navbar">
            <ul class="navbar-nav">

                <li class="logo">
                    <a class="nav-link">
                        <span class="link-text logo-text">ADS</span>
                        <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
                            <g class="fa-group">
                                <path fill="currentColor"
                                    d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                                    class="fa-secondary"></path>
                                <path fill="currentColor"
                                    d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                                    class="fa-primary"></path>
                            </g>
                        </svg>
                    </a>
                </li>

                @if ($current == 'menu')
                    <li class="nav-item">
                        <a href="{{ route('ads.aluno') }}" class="nav-link">

                            <span class="link-text">Alunos</span>
                        </a>
                        <a href="{{ route('ads.professor') }}" class="nav-link">

                            <span class="link-text">Professor</span>
                        </a>
                    </li>
                @endif
                @if($current == 'prof')
                <li class="nav-item">
                    <a href="#" class="nav-link">

                        <span class="link-text">Professores</span>
                    </a>
                </li>
                @endif
                @if($current  == 'cursos')
                <li class="nav-item">
                    <a href="#" class="nav-link">

                        <span class="link-text">Cursos</span>
                    </a>
                </li>
                @endif

                <li class="nav-item" id="themeButton">
                    <a href="#" class="nav-link">
                    </a>
                </li>
            </ul>

        </nav>
        <div class="conteudos_internos">

            @yield('content')
        </div>

    </div>
    <div class="footer_principal">

    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</html>
