@extends('Dashboard.template', ['current' => 'menu'])
@section('content')
    <div class="dark">
        <div class="col s12">
            <div class="row" id="Aluno">
                <div class="row">
                    <div class="input-field col s6">
                        <label for="">Nome Completo</label>
                        <input id="nome_aluno" name="nome_aluno" type="text" class="form-control">
                    </div>
                    <div class="input-field col s6">
                        <label for="">Data de Nascimento</label>
                        <input id="data_nascimento" name="data_nascimento" type="date" class="form-control">
                    </div>
                    <div class="input-field col s6">
                        <label for="">CPF</label>
                        <input id="cpf" name="cpf" type="text" class="form-control">
                    </div>
                    <div class="input-field col s6">
                        <label for="">RG</label>
                        <input id="rg" type="text" class="form-control">
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="">Telefone</label>
                        <input id="telefone" name="telefone" type="text" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Curso</label>
                        <select id="curso" name="curso" type="text" class="form-control">
                            <option value="" selected disabled>Escolha</option>
                        </select>
                    </div>
                </div>
                <hr>
                <h6>dados pessoais</h6>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="">CEP</label>
                        <input id="cep" name="cep" type="text" class="cep form-control">
                        <button type="button" id="buttoncpf" class="btn btn-primary"
                            onclick="consultaCep()">consultar</button>
                    </div>
                </div>
                <div class="row" id="cpf_red">
                    <div class="mb-2 col-md-3 ">
                        <label for="">UF</label>
                        <input id="uf" name="uf" type="text" class="form-control">
                    </div>
                    <div class="input-field col s6">
                        <label for="">Bairro</label>
                        <input id="bairro" name="bairro" type="text" class="form-control">
                    </div>
                    <div class="input-field col s6">
                        <label for="">Endereço</label>
                        <input id="rua" name="rua" type="text" class="form-control">
                    </div>

                </div>

            </div>

            <button style="margin-top: 10px;" type="button" class="btn btn-success" onclick="newAluno();">Cadastrar</button>
        </div>

    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/api/Aluno/newAluno.js') }}"></script>
    <script src="{{ asset('js/api/Curso/listCursos.js') }}"></script>

@endsection
