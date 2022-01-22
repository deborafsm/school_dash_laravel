@extends('Dashboard.template', ['current' => 'curso'])
@section('content')
    <div id="Cursos">
        <div class="row">

            <div class="col-md-6 mb-3">
                <label for="">Nome do Curso:</label>
                <input id="nome_curso" name="nome_curso" type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">Duração do Curso (semestre):</label>
                <input id="duracao_sem" name="duracao_sem" type="text" class="form-control">
            </div>
        </div>
        <button onclick="newCurso()">Cadastrar</button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/api/Curso/newCurso.js') }}"></script>




@endsection
