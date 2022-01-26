@extends('Dashboard.template', ['current' => 'teste'])
@section('content')
    <style>
        img {
            width: 100px;
        }

        .personagem {
            width: 100px;
        }

        #herois {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

    </style>
    <h1>Teste</h1>
    <div id="herois">

    </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{ asset('js/api/Teste/teste.js') }}"></script>
