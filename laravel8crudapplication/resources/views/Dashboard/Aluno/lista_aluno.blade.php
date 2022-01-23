@extends('Dashboard.template', ['current' => 'listaAlunos'])
@section('content')
    <hr>
    <div class="form-group">
        <label style="font-weight: 600" for="exampleFormControlTextarea1">Pesquisa</label>
        <input style="font-weight: 200" class="form-control" type="text" name="" id="pesq">
    </div>
    <div class="mb-3 col-md-4">
        <label for="">Por curso</label>
        <select id="curso" name="curso" type="text" class="form-control">
            <option value="" selected >Escolha</option>
        </select>
    </div>
    <hr>
    <a href="{{ route('csv') }}"><button class="btn btn-secondary btn-sm ">CSV</button></a>

    <div class="lista_alunos">
        <table class="table table-sm table-bordered mt-2 " style="border-radius: 12px">
            <thead class=" grey">
                <tr id="lista">
                    <th scope="col" class="font-light text-darken-2 text-center align-middle">Nome Aluno</th>
                    <th scope="col" class="font-light text-center align-middle">Data Nascimento</th>
                    <th scope="col" class="font-light text-center align-middle">CPF</th>
                    <th scope="col" class="font-light text-center align-middle">RG</th>
                    <th scope="col" class="font-light text-center align-middle">Telefone</th>
                    <th scope="col" class="font-light text-center align-middle">CURSO</th>
                    <th scope="col" class="acoes font-weight-light text-center align-middle">Ações</th>
                </tr>
            </thead>
            <tbody id="listAlunos">
            </tbody>
        </table>


        <div id="modalAluno" class="modal">
            <div class="modal-content" id="content_edit_aluno">
                <div class="modal-header">
                    <h4><i class="fa fa-edit text-light"></i> Editar Aluno</h4>
                    <span id="close1" class="close" style="margin-bottom: -3px"
                        onclick="closeModal()">&times;</span>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="">Nome Completo:</label>
                            <input id="nome_aluno_Edit" name="nome_aluno" type="text" class="validate" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Data de Nascimento:</label>
                            <input id="data_nascimento_Edit" name="data_nascimento" type="date" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="">CPF:</label>
                            <input id="cpf_Edit" name="cpf" type="text" class="validate">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="">RG:</label>
                            <input id="rg_Edit" type="text" class="validate">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="">Telefone:</label>
                            <input id="telefone_Edit" type="text" class="validate">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-7 mb-7">
                            <label for="">Curso:</label>
                            <input id="curso_Edit" type="text" class="validate">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" onclick="closeModal()">Fechar</button>
                    <button class="btn btn-secondary" onclick="editAluno(); closeModal();">Editar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/api/Aluno/listaAlunos.js') }}"></script>
    <script src="{{ asset('js/api/Aluno/editAlunos.js') }}"></script>
@endsection
