@extends('Dashboard.template', ['current' => 'evento'])
@section('content')
    <div id="eventos">


        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Titulo do Evento</label>
                <input id="titulo" name="titulo" type="text" class="validate" required>
            </div>

            <div class="col-md-6 mb-3">
                <div class="row">
                    <label for="">Data<label>
                </div>
                <input id="data" name="data" type="date" class="validate" required>
            </div>
            <div class="col-md-2 mb-3">
                <div class="row">
                    <label for="">Hora'<label>
                </div>
                <input id="horario" name="horario" type="time" class="validate" required>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <label for="">Observação</label>
                </div>
                <textarea id="observacao" name="observacao" type="text-area" class="validate" required></textarea>
            </div>
        </div>
        <a class="btn-floating btn-large waves-effect waves-light red" onclick="addEvent()"><i
                class="material-icons">add</i></a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/api/Eventos/newEvents.js') }}"></script>
@endsection
