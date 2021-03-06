<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
        href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap') }} ">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet">

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
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('ads.aluno') }}" class="nav-link">

                            <span class="link-text">Alunos</span>
                        </a>
                    </li>
                @endif
                @if ($current == 'professor')
                    <li class="nav-item">
                        <a href="{{ route('ads.professor') }}" class="nav-link">

                            <span class="link-text">Professor</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('ads.professor') }}" class="nav-link">

                            <span class="link-text">Professor</span>
                        </a>
                    </li>
                @endif
                @if ($current == 'listAluno')
                    <li class="nav-item">
                        <a href="{{ route('ads.listAluno') }} " class="nav-link">
                            <span class="link-text">Lista Alunos</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('ads.listAluno') }} " class="nav-link">
                            <span class="link-text">Lista Alunos</span>
                        </a>
                    </li>
                @endif
                @if ($current == 'curso')
                    <li class="nav-item">
                        <a href="{{ route('ads.curso') }}" class="nav-link">
                            <span class="link-text">Curso</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('ads.curso') }}" class="nav-link">
                            <span class="link-text">Curso</span>
                        </a>
                    </li>
                @endif
                @if ($current == 'evento')
                    <li class="nav-item">
                        <a href="{{ route('ads.evento') }}" class="nav-link">
                            <span class="link-text">Evento</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('ads.evento') }}" class="nav-link">
                            <span class="link-text">Evento</span>
                        </a>
                    </li>
                @endif
                @if ($current == 'lista_events')
                    <li class="nav-item">
                        <a href="{{ route('ads.listevento') }}" class="nav-link">
                            <span class="link-text">Lista de Evento</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('ads.listevento') }}" class="nav-link">
                            <span class="link-text">Lista de Evento</span>
                        </a>
                    </li>
                @endif
                @if ($current == 'materia')
                    <li class="nav-item">
                        <a href="{{ route('ads.materia') }}" class="nav-link">
                            <span class="link-text">materia</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('ads.materia') }}" class="nav-link">
                            <span class="link-text">materia</span>
                        </a>
                    </li>
                @endif
                @if ($current == 'teste')
                    <li class="nav-item">
                        <a href="{{ route('ads.teste') }}" class="nav-link">
                            <span class="link-text">teste</span>
                        </a>
                    </li>
                @else
                    <li class="teste">
                        <a href="{{ route('ads.teste') }}" class="nav-link">
                            <span class="link-text">teste</span>
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
            <div class="nav_menu_allPages">
                @if ($current == 'menu')
                    <h5>Alunos</h5>
                    <div class="title"></div>
                @endif
                @if ($current == 'professor')
                    <h5>Professores</h5>
                    <div class="title"></div>
                @endif
                @if ($current == 'listaAlunos')
                    
                    <div class="title">
                        <h5>Lista de Alunos</h5>
                    </div>
                @endif
                @if ($current == 'curso')
                    <h5></h5>
                    <div class="title"></div>
                @endif
                @if ($current == 'evento')
                    <h5>Evento</h5>
                    <div class="title"></div>
                @endif
                @if ($current == 'Lista de Eventos')
                    <h5>Evento</h5>
                    <div class="title"></div>
                @endif
                @if ($current == 'teste')
                    <h5>TESTE</h5>
                    <div class="title"></div>
                @endif
            </div>
            @yield('content', $current)
        </div>


        <div class="footer_principal">

        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</html>
