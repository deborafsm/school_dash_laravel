@extends('Dashboard.template', ['current' => 'curso'])
@section('content')
    <div class="row">

        <div class="col-md-6 mb-3">
            <label for="">Nome do Curso:</label>
            <input id="nome_curso" name="nome_curso" type="text" class="validate" required>
        </div>
        <div class="form-group col-md-6">
            <label for="">Duração do Curso (semestre):</label>
            <input id="duracao_curso" name="duracao_curso" type="text" class="validate" required>
        </div>
    </div>
    <a onclick="" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

@endsection
