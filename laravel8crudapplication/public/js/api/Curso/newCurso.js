const newCurso = () => {
    let nome_curso = document.getElementById('nome_curso').value;
    let duracao_sem = document.getElementById('duracao_sem').value;

    $.ajax({
        method: 'POST',
        url: "http://127.0.0.1:8000/api/newCurso",
        data: {
            'nome_curso': nome_curso,
            'duracao_sem': duracao_sem
        },
        success: function (e) {
            let data = JSON.parse(e);
            if (data.status == 1) {
                var p = $(`<div class="alert1">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                ${data.msg}
                </div>`);
                p.hide()
                $('#Cursos').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
                document.getElementById('nome_aluno').value = '';
                document.getElementById('duracao_sem').value = '';

            } else {
                var p = $(`<div class="alert1">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                Erro ao cadastrar Curso.
                </div>`);
                p.hide()
                $('#Cursos').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
            }
        }

    })
}

