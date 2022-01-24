@extends('Dashboard.template', ['current' => 'curso'])
@section('content')
    <div id="Cursos">

        <h3>Cadastro de "Materias"</h3>
        <hr>
        <div id="curso_container">
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="">Professor da Materia</label>
                    <select id="prof" name="prof" type="text" class="form-control">
                        <option value="" selected>Escolha</option>
                    </select>
                </div>
                <div class="mb-3 col-md-4">
                    <label for="">Nome do Curso</label>
                    <select id="curso" name="curso" type="text" class="form-control">
                        <option value="" selected>Escolha</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Duração do Curso (semestre):</label>
                    <input id="duracao_sem" name="duracao_sem" type="number" class="form-control">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Nome da Materia:</label>
                    <input id="nome_materia" name="nome_materia" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Semestre:</label>
                    <input id="semestre" name="semestre" type="text" class="form-control">
                </div>

            </div>
            <button onclick="newMateria()">Cadastrar</button>
        </div>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/api/Curso/newCurso.js') }}"></script>
    <script src="{{ asset('js/api/Materia/materia.js') }}"></script>




@endsection
