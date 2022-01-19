@extends('Dashboard.template', ['current' => 'getEvent'])
@section('content')
    <div id="pesquisa">
        <div class="input-group mb-3">
            <input id="pesq" type="text" class="form-control" placeholder="Pesquisa" aria-label="Pesquisa"
                aria-describedby="basic-addon1">
        </div>
    </div>
    <table  Lclass="centered responsive-table">
        <thead>
            <tr>
                <th class=" text-center align-middle">Titulo</th>
                <th class=" text-center align-middle">Data</th>
                <th class=" text-center align-middle">Hora</th>
                <th class=" text-center align-middle">Observação</th>
                <th class=" text-center align-middle">Ações</th>
            </tr>
        </thead>
        <tbody id="listEvents">

        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/api/Eventos/listEvents.js') }}"></script>
@endsection
