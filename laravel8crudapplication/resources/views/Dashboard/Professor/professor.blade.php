@extends('Dashboard.template', ['current' => 'professor'])
@section('content')
    <div id="professores">
        <div class="dark">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="nome_completo_prf" type="text" class="validate">
                            <label for="nome_completo_prf">Nome Completo</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="data_nascimento_prf" type="date" class="validate">
                            <label for="data_nascimento_prf">Data de Nascimento</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="matricula_prf" type="text" class="validate">
                            <label for="matricula_prf">Matricula</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="telefone_prf" type="text" class="validate">
                            <label for="telefone_prf">Telefone</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="curso_prf" type="text" class="validate">
                            <label for="curso_prf">Curso</label>
                        </div>
                    </div>
                  
                    <a onclick="addPrf()" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/api/Professor/newProfessor.js') }}"></script>

@endsection
