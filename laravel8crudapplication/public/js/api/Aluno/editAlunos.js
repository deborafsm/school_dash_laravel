
let idAluno;

function editAluno() {
    let nome_aluno = document.getElementById('nome_aluno_Edit').value
    let data_nascimento = document.getElementById('data_nascimento_Edit').value
    let cpf = document.getElementById('cpf_Edit').value
    let rg = document.getElementById('rg_Edit').value
    let telefone = document.getElementById('telefone_Edit').value
    let curso = document.getElementById('curso_Edit').value
    $.ajax({
        method: "POST",
        url: `http://127.0.0.1:8000/api/edit`,
        data: {
            'id': idAluno,
            'nome_aluno': nome_aluno,
            'data_nascimento': data_nascimento,
            'cpf': cpf,
            'rg': rg,
            'telefone': telefone,
            'curso': curso
        },
        success: function (e) {
            let response = JSON.parse(e)
            getAluno()
            if (response.status == 0) {
                var p = $(`<div class="alert1">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                ${response.msg}
                </div>`);
                p.hide()
                $('.lista_alunos').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
            } else {
                var p = $(`<div class="alert1">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                ${response.msg}
                </div>`);
                p.hide()
                $('.lista_alunos').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
            }
        }
    })
}




function closeModal() {
    var modal = document.getElementById('modalAluno');
    modal.style.display = "none";
}


$('#close1').on('click', function (r) {
    var modalAluno = document.getElementById('modalAluno');
    if (r.target == modalAluno) {
        modalAluno.style.display = "none";
    }
})

function modalEditAlunos(id_a) {
    idAluno = id_a
    $.ajax({
        method: "GET",
        url: `http://127.0.0.1:8000/api/GetById/${idAluno}`,
        success: function (e) {
            let nome = JSON.parse(e)
            let data_nascimento
            let telefone
            let cpf
            let rg
            let curso
            let nome_aluno
            nome.forEach(function (item) {
                nome_aluno = item.nome_aluno
                data_nascimento = item.data_nascimento
                cpf = item.cpf
                rg = item.rg
                telefone = item.telefone
                curso = item.curso
            })

            document.getElementById('nome_aluno_Edit').value = nome_aluno
            document.getElementById('data_nascimento_Edit').value = data_nascimento
            document.getElementById('cpf_Edit').value = cpf
            document.getElementById('rg_Edit').value = rg
            document.getElementById('telefone_Edit').value = telefone
            document.getElementById('curso_Edit').value = curso



            var modal = document.getElementById("modalAluno");
            var conteudo_modal = document.getElementById('content_edit_aluno')
            modal.style.display = "block";
            modal.style.paddingTop = "11px";
            modal.style.paddingLeft = "11px";
            conteudo.style.width = "19%";
            modal.style.backgroundColor = "red";
        }
    })
}
