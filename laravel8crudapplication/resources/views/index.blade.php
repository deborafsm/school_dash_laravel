@extends('Dashboard.template')
@section('content')

    <?php
    $id = session()->all();
    ?>
    @csrf
    <form action="">
        <div class="form-row">
            <div class="col-12 ">
                <h5 for="validationCustom01" class="titulos">Dados do aluno</h5>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="col-md-5">
                <label for="validationCustom01" style="margin: 10px 5px 0px 0px">Nome Completo do Professor</label>
                <input type="text" class="form-control form-control-sm" name="n_paciente" id="nome_paciente"
                    placeholder="Digite o nome do paciente" required>
            </div>
            <div class="col-md-5">
                <label for="validationCustom01" style="margin: 10px 5px 0px 0px">Materia</label>
                <input type="text" class="form-control form-control-sm" name="n_paciente" id="nome_paciente"
                    placeholder="Digite o nome do paciente" required>
            </div>
            <div class="col-md-5">
                <label for="validationCustom01" style="margin: 10px 5px 0px 0px">CNE</label>
                <input type="text" class="form-control form-control-sm" name="n_paciente" id="nome_paciente"
                    placeholder="Digite o nome do paciente" required>
            </div>
            <div class="form-row d-flex justify-content-center" style="padding:5px; ">
                <button id="envia" class="btn btn-secondary">Enviar</button>
            </div>
    </form>
@endsection
