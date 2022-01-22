$(function () {
    getAluno()

})
$("#pesq").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#listAlunos tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});
function getAluno() {
    $.ajax({
        method: 'GET',
        url: 'http://127.0.0.1:8000/api/getAllAluno',
        success: function (e) {
            let data = JSON.parse(e);
            $('.listAluno').remove();
            data.forEach(function (item, index) {
                $('#listAlunos').append(`
                    <tr class="listAluno">
                    <th scope="row" class=" text-center align-middle">${item.nome_aluno}</th>
                    <th class=" text-center align-middle">${item.data_nascimento}</th>
                    <th class="  text-center align-middle">${item.cpf}</th>
                    <th class="  text-center align-middle">${item.rg}</th>
                    <th class="  text-center align-middle">${item.telefone}</th>
                    <th class="  text-center align-middle">${item.curso}</th>
                    <th class="acoes  text-center align-middle">
                    <button class="btn btn-sm btn-secondary ml-4" onclick="modalEditAlunos(` + item.id + `)"><i class="fa fa-edit mr-1"></i>Editar</button></th>
                </tr> 
                `);
            })
        }
    })
}

function allCursos() {
    $.ajax({
        method: 'GET',
        url: 'http://127.0.0.1:8000/api/getCursos',
        success: function (e) {
            var data = JSON.parse(e);
            $('#curso').empty();
            $('#curso').append(`<option value="" selected  disabled>Escolha</option>`);
            data.forEach(function (item, index) {
                item.forEach(function (item2, index2) {
                    $('#curso').append(`
                <option  id="opt" value="${item2.curso}">${item2.curso}</option>
                `)
                })
            })
        }
    })
}
