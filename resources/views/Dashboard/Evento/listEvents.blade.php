@extends('Dashboard.template', ['current' => 'listevento'])
@section('content')
    <hr>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Pesquisa</label>
        <input class="form-control" type="text" name="" id="pesq">
    </div>
    <hr>
    <div class="tab">

        <table id="tableEvents" class="table table-hover" style="border-radius: 12px">
            <thead class=" grey">
                <tr>
                    <th scope="col" class="font-light text-darken-2 text-center align-middle">Titulo</th>
                    <th scope="col" class="font-light text-center align-middle">Data</th>
                    <th scope="col" class="font-light text-center align-middle">Hora</th>
                    <th scope="col" class="font-light text-center align-middle">Descrição</th>
                    <th scope="col" class="acoes font-weight-light text-center align-middle"></th>
                </tr>
            </thead>
            <tbody id="listEvents">
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/api/Eventos/listEvents.js') }}"></script>

@endsection
