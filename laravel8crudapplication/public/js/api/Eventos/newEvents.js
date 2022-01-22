function addEvent() {
    let titulo = document.getElementById('titulo').value;
    let data = document.getElementById('data').value;
    let hora = document.getElementById('horario').value;
    let obs = document.getElementById('observacao').value;


    $.ajax({
        method: 'POST',
        url: 'http://127.0.0.1:8000/api/newEventos',
        data: {
            'titulo': titulo,
            'data': data,
            'hora': hora,
            'obs': obs
        },
        success: function (e) {
            let data = JSON.parse(e);
            if (data.status == 1) {
                var p = $(`<div class="alert1">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        ${data.msg}
                        </div>`);
                p.hide()
                $('#eventos').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
                document.getElementById('titulo').value = '';
                document.getElementById('data').value = '';
                document.getElementById('horario').value = '';
                document.getElementById('observacao').value = '';
            } else if (data.status == 0) {
                var p = $(`<div class="alert1">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Erro ao cadastrar Professor.
                    </div>`);
                p.hide()
                $('#eventos').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
            }
        }

    })


    function listEvents() {
        $.ajax({
            method: "GET",
            url: "http://127.0.0.1:8000/api/listEvents";
        })
    }
}
