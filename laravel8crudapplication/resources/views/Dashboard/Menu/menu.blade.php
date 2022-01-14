@extends('Dashboard.template', ['current' => 'menu'])
@section('content')
    <div class="dark">
        <div class="col s12">
            <div class="row" id="Aluno">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="nome_aluno" name="nome_aluno" type="text" class="validate">
                        <label for="">Nome Completo</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="data_nascimento" name="data_nascimento" type="date" class="validate">
                        <label for="">Data de Nascimento</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="cpf" name="cpf" type="text" class="validate">
                        <label for="">CPF</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="rg" type="text" class="validate">
                        <label for="">RG</label>
                    </div>
                    <select id="curso" name="curso" class="curso" aria-label="Default select example">
                        <option value="1"></option>
                    </select>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="telefone" name="telefone" type="text" class="validate">
                        <label for="">Telefone</label>
                    </div>
                </div>
                <select class="form-select" id="curso" aria-label="Default select example">
                </select>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="newAluno();">Submit
            </button>

        </div>

    </div>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://rawgit.com/select2/select2/master/dist/js/select2.js"></script>

    <script src="{{ asset('js/api/Aluno/newAluno.js') }}"></script>
    <script src="{{ asset('js/api/Curso/listCursos.js') }}"></script>
  
@endsection
