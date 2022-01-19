$(function(){
    getAluno()
})

function getAluno() {
    $.ajax({
        method: 'GET',
        url: 'http://127.0.0.1:8000/api/getAluno',
        success: function (e) {
            let data = JSON.parse(e);
            $('.listAlunos').remove();
            data.forEach(function (item, index) {
                $('#listAlunos').append(`
                    <tr class="listAluno">
                    <th scope="row" class=" text-center align-middle">${item.nome_aluno}</th>
                    <th class=" text-center align-middle">${item.data_nascimento}</th>
                    <th class="  text-center align-middle">${item.cpf}</th>
                    <th class="  text-center align-middle">${item.rg}</th>
                    <th class="  text-center align-middle">${item.telefone}</th>
                    <th class="  text-center align-middle">${item.curso}</th>
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
