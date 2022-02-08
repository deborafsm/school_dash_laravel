$(function () {
    getAluno()
    getCurso()

})
$("#pesq").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#listAlunos tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

const getAluno = () => {
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
                    <th class="  text-center align-middle">${item.Curso}</th>
                    <th class="acoes  text-center align-middle">
                    <button class="btn btn-sm btn-secondary ml-4" onclick="modalEditAlunos(` + item.id + `)"><i class="fa fa-edit mr-1"></i>Editar</button></th>
                </tr> 
                `);
            })
        }
    })
}



const getCurso = () => {
    fetch(`http://127.0.0.1:8000/api/getCursos`).then((response) => {
        return response.json();
    }).then((jsonParsed) => {
        jsonParsed.forEach(element => {
            $('#curso').append(`
            <option value="${element.nome_curso}">${element.nome_curso}</option>`)
        });
    });
}



$("#curso").on("change", function () {
    var value = $(this).val().toLowerCase();
    $("#listAlunos tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});
