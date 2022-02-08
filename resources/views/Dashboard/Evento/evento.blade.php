@extends('Dashboard.template', ['current' => 'evento'])
@section('content')
    <div id="eventos">

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">Titulo do Evento</label>
                <input id="titulo" name="titulo" type="text" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label for="">Data</label>
                <input id="data" name="data" type="date" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label for="">Hora</label>
                <input id="horario" name="horario" type="time" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
            </div>

        </div>
        <div class="form-row d-flex justify-content-start" style="padding-top: 10px">
            <button type="button" class="btn btn-success" onclick="addEvent()">Enviar</button>
        </div>

    </div>
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/api/Eventos/newEvents.js') }}"></script>
    <script src="{{ asset('js/api/Eventos/listEvents.js') }}"></script>

@endsection
