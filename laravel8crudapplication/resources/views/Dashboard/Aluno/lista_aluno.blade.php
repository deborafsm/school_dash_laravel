@extends('Dashboard.template', ['current' => 'listaAlunos'])
@section('content')
    <div class="lista_alunos">
        <a href="{{ route('csv') }}"><button class="btn btn-secondary btn-sm ">CSV</button></a>
        <table class="table table-sm table-bordered mt-2 " style="border-radius: 12px">
            <thead class=" grey">
                <tr>
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
                    <div class="input-field col s6">
                        <input id="nome_aluno_Edit" name="nome_aluno" type="text" class="validate">
                        <label for="">Nome Completo</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="data_nascimento_Edit" name="data_nascimento" type="date" class="validate">
                        <label for="">Data de Nascimento</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="cpf_Edit" name="cpf" type="text" class="validate">
                        <label for="">CPF</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="rg_Edit" type="text" class="validate">
                        <label for="">RG</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="telefone_Edit" type="text" class="validate">
                        <label for="">Telefone</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="curso_Edit" type="text" class="validate">
                        <label for="">Curso</label>
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
