// $(function () {
//     addPrf();
// });

function addPrf() {
    let nome_completo_prf = document.getElementById('nome_completo_prf').value;
    let data_nascimento_prf = document.getElementById('data_nascimento_prf').value;
    let matricula_prf = document.getElementById('matricula_prf').value;
    let telefone_prf = document.getElementById('telefone_prf').value;
    let curso_prf = document.getElementById('curso_prf').value;

    $.ajax({
        method: 'POST',
        url: 'http://127.0.0.1:8000/api/newPrf',
        data: {
            'nome_completo_prf': nome_completo_prf,
            'data_nascimento_prf': data_nascimento_prf,
            'matricula_prf': matricula_prf,
            'telefone_prf': telefone_prf,
            'curso_prf': curso_prf
        },
        success: function (e) {
            let data = JSON.parse(e);
            if (data.status == 1) {
                var p = $(`<div class="alert1">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        ${data.msg}
                        </div>`);
                p.hide()
                $('#professores').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
                document.getElementById('nome_completo_prf').value = '';
                document.getElementById('data_nascimento_prf').value = '';
                document.getElementById('matricula_prf').value = '';
                document.getElementById('telefone_prf').value = '';
                document.getElementById('curso_prf').value = '';
            } else if (data.status == 0) {
                var p = $(`<div class="alert1">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Erro ao cadastrar Professor.
                        </div>`);
                p.hide()
                $('#professores').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });

            }
        }

    })
}
