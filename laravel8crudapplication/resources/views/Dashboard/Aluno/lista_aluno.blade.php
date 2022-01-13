@extends('Dashboard.template', ['current' => 'listaAlunos'])
@section('content')
    <table class="table table-sm table-bordered mt-2 " style="border-radius: 12px">
        <thead class=" grey">
            <tr>
                <th scope="col" class="font-light text-darken-2 text-center align-middle">Nome Aluno</th>
                <th scope="col" class="font-light text-center align-middle">Data Nascimento</th>
                <th scope="col" class="font-light text-center align-middle">CPF</th>
                <th scope="col" class="font-light text-center align-middle">RG</th>
                <th scope="col" class="font-light text-center align-middle">Telefone</th>
                <th scope="col" class="font-light text-center align-middle">CURSO</th>
            </tr>
            
        </thead>
        <tbody id="listAlunos">
        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/api/Aluno/listaAlunos.js') }}"></script>
@endsection
