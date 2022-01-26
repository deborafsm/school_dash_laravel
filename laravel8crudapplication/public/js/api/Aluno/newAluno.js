$(function () {
    getCurso();

});
const newAluno = () => {
    let nome_aluno = document.getElementById('nome_aluno').value;
    let data_nascimento = document.getElementById('data_nascimento').value;
    let cpf = document.getElementById('cpf').value;
    let rg = document.getElementById('rg').value;
    let telefone = document.getElementById('telefone').value;
    let curso = document.getElementById('curso').value;
    $.ajax({
        method: 'POST',
        url: 'http://127.0.0.1:8000/api/newAluno',
        data: {
            'nome_aluno': nome_aluno,
            'data_nascimento': data_nascimento,
            'cpf': cpf,
            'rg': rg,
            'telefone': telefone,
            'curso': curso
        },
        success: function (e) {
            let data = JSON.parse(e);
            if (data.status == 1) {
                var p = $(`<div class="alert1">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        ${data.msg}
                        </div>`);
                p.hide()
                $('#Aluno').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
                document.getElementById('nome_aluno').value = '';
                document.getElementById('data_nascimento').value = '';
                document.getElementById('cpf').value = '';
                document.getElementById('rg').value = '';
                document.getElementById('telefone').value = '';
                document.getElementById('curso').value = '';

            } else if (data.status == 0) {
                var p = $(`<div class="alert1">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Erro ao cadastrar Aluno.
                        </div>`);
                p.hide()
                $('#Aluno').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });

            }
        }
    })
}


// const getCurso = () => {
//     $.ajax({
//         method: 'GET',
//         url: 'http://127.0.0.1:8000/api/getCursos',
//         success: function (e) {
//             var data = JSON.parse(e);
//             data.forEach(function (item, index) {
//                 $('#curso').append(`
//                 <option value="${item.nome_curso}">${item.nome_curso}</option>
//                 `)

//             })
//         }
//     })
// }
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
