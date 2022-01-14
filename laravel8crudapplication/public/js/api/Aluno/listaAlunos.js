$(function(){
    getAluno();
})
// function newAluno() {

//     let nome_aluno = document.getElementById('nome_aluno').value;
//     let data_nascimento = document.getElementById('data_nascimento').value;
//     let cpf = document.getElementById('cpf').value;
//     let rg = document.getElementById('rg').value;
//     let telefone = document.getElementById('telefone').value;
//     let curso = document.getElementById('curso').value;
//     $.ajax({
//         method: 'POST',
//         url: 'http://127.0.0.1:8000/api/newAluno',
//         data: {
//             'nome_aluno': nome_aluno,
//             'data_nascimento': data_nascimento,
//             'cpf': cpf,
//             'rg': rg,
//             'telefone': telefone,
//             'curso': curso
//         },
//         success: function (e) {
//             getAluno();
//             let data = JSON.parse(e);
//             if (data.status == 1) {
//                 var p = $(`<div class="alert1">
//                         <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
//                         ${data.msg}
//                         </div>`);
//                 p.hide()
//                 $('#Aluno').append(p);
//                 p.fadeIn(500, function () {
//                     window.setTimeout(function () {
//                         p.fadeOut();
//                     }, 2000)
//                 });
//                 document.getElementById('nome_aluno').value = '';
//                 document.getElementById('data_nascimento').value = '';
//                 document.getElementById('cpf').value = '';
//                 document.getElementById('rg').value = '';
//                 document.getElementById('telefone').value = '';
//                 document.getElementById('curso').value = '';

//             } else if (data.status == 0) {
//                 var p = $(`<div class="alert1">
//                         <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
//                         Erro ao cadastrar Aluno.
//                         </div>`);
//                 p.hide()
//                 $('#Aluno').append(p);
//                 p.fadeIn(500, function () {
//                     window.setTimeout(function () {
//                         p.fadeOut();
//                     }, 2000)
//                 });

//             }
//         }
//     })
// }
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
