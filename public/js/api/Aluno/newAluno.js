$(function () {
    getCurso();
    $("#cpf_red").hide();
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
const consultaCep = () => {
    $(".progress").show();
    var numeroCep = document.getElementById("cep").value = ("03883000");
    fetch(`https://viacep.com.br/ws/` + numeroCep + `/json/`).then((response) => {
        return response.json();
    }).then((jsonParsed) => {
        console.log(jsonParsed)
        $('#cep').val(`${jsonParsed.cep}`)
        $('#rua').val(`${jsonParsed.logradouro}`)
        $('#bairro').val(`${jsonParsed.bairro}`)
        $('#uf').val(`${jsonParsed.uf}`)
        $('#cpf_red').show();
        $('.progress').hide();
    });
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
