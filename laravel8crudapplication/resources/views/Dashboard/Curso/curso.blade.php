@extends('Dashboard.template', ['current' => 'curso'])
@section('content')
    <div id="Cursos">

        <h3>Cadastro de Cursos</h3>
        <hr>
        <div id="curso_container">
            <div class="row">
                <div class="mb-3 col-md-5">
                    <label for="">Curso</label>
                    <input id="nome_curso" name="nome_curso" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Duração do Curso (semestre):</label>
                    <input id="duracao_sem" name="duracao_sem" type="number" class="form-control">
                </div>
            </div>
            <hr>
            <button onclick="newCurso()">Cadastrar</button>
        </div>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/api/Curso/newCurso.js') }}"></script>
    {{-- <script src="{{ asset('js/api/Materia/materia.js') }}"></script> --}}




@endsection
