@extends('Dashboard.template', ['current' => 'professor'])
@section('content')
    <div class="dark">
        <div class="card-panel teal blue-grey">
            <h4 class="">Professores</h4>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="" type="text" class="validate">
                        <label for="">Nome Completo</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="" type="date" class="validate">
                        <label for="">Data de Nascimento</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="matricula" type="text" class="validate">
                        <label for="">Matricula</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="curso" type="text" class="validate">
                        <label for="">Curso</label>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="telefone" type="text" class="validate">
                        <label for="">Telefone</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="telefone" type="text" class="validate">
                        <label for="">Curso</label>
                    </div>
                </div>
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

@endsection
