@extends('Dashboard.template', ['current' => 'professor'])
@section('content')
    <div id="professores">
        <div class="dark">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="nome_completo_prf">Nome Completo</label>
                            <input id="nome_completo_prf" type="text" class="form-control">
                        </div>
                        <div class="input-field col s6">
                            <label for="data_nascimento_prf">Data de Nascimento</label>
                            <input id="data_nascimento_prf" type="date"class="form-control">
                        </div>
                        <div class="input-field col s6">
                            <label for="matricula_prf">Matricula</label>
                            <input id="matricula_prf" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="telefone_prf">Telefone</label>
                            <input id="telefone_prf" type="text" class="form-control">
                        </div>
                        {{-- <div class="mb-3 col-md-4">
                            <label for="" >Curso</label>
                            <select id="curso" name="curso" type="text" class="form-control" >
                              <option value="" selected disabled>Escolha</option>
                            </select>
                          </div> --}}
                    </div>
                    <button style="margin-top: 10px;" type="button" class="btn btn-success" onclick="addPrf()">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/api/Professor/newProfessor.js') }}"></script>

@endsection
