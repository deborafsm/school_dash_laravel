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
        url: `http://127.0.0.1:8000/api/editAluno`,
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


    function modalEditAlunos(ids) {
        idAluno = ids;
        $.ajax({
            method: "GET",
            url: `http://127.0.0.1:8000/api/editAlunoId/${idAluno}`,
            success: function (e) {
                let nome_aluno = JSON.parse(e)
                let data_nascimento
                let telefone
                let cpf
                let rg
                let curso
                let nome
                nome_aluno.forEach(function (item) {
                    nome = item.nome_aluno
                    data_nascimento = item.data_nascimento,
                        telefone = item.telefone,
                        cpf = item.cpf,
                        rg = item.rg,
                        curso = item.curso
                })

                document.getElementById('nome_aluno').value = nome
                document.getElementById('data_nascimento').value = data_nascimento
                document.getElementById('telefone').value = telefone
                document.getElementById('cpf').value = cpf
                document.getElementById('rg').value = rg
                document.getElementById('curso').value = curso
                document.getElementById('nome_aluno').value = nome


                var modal = document.getElementById("modalAluno");
                var conteudo_modal = document.getElementById('content_edit_aluno')
                modal.style.display = "block";
                modal.style.paddingTop = "75px";
                modal.style.paddingLeft = "100px";
                conteudo.style.width = "49%";
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
}
