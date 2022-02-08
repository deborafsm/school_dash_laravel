$(function () {
    getCursos()
    getProf()

})

const newMateria = () => {
    let professor = document.getElementById('prof').value;
    let curso = document.getElementById('curso').value;
    let semestre = document.getElementById('semestre').value;
    let nome_materia = document.getElementById('nome_materia').value
    $.ajax({
        method: 'POST',
        url: 'http://127.0.0.1:8000/api/newMateria',
        data: {
            'professor': professor,
            'curso': curso,
            'semestre': semestre,
            'nome_materia': nome_materia
        },
        success: function (e) {
            let data = JSON.parse(e);
            if (data.status == 1) {
                var p = $(`<div class="alert1">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        ${data.msg}
                        </div>`);
                p.hide()
                $('#curso_container').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
                document.getElementById('prof').value = '';
                document.getElementById('curso').value = '';
                document.getElementById('semestre').value = '';
                document.getElementById('nome_materia').value = '';
            } else if (data.status == 0) {
                var p = $(`<div class="alert1">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Erro ao cadastrar materia.
                        </div>`);
                p.hide()
                $('#curso_container').append(p);
                p.fadeIn(500, function () {
                    window.setTimeout(function () {
                        p.fadeOut();
                    }, 2000)
                });
            }
        }

    })
}
const getCursos = () => {
    fetch(`http://127.0.0.1:8000/api/getCursos`).then((response) => {
        return response.json();
    }).then((jsonParsed) => {
        jsonParsed.forEach(element => {
            $('#curso').append(`
            <option value="${element.nome_curso}">${element.nome_curso}</option>
            `)
        });
    });
}

const getProf = () => {
    fetch(`http://127.0.0.1:8000/api/getPrf`).then((response) => {
        return response.json();
    }).then((jsonParsed) => {
        jsonParsed.forEach(element => {
            $('#prof').append(`
            <option value="${element.nome_completo}">${element.nome_completo}</option>`)
        });
    });
}


const GetCursoPrf = () => {
    $.ajax({
        method: 'GET',
        url: 'http://127.0.0.1:8000/api/getprofCurso',
        success: function (e) {
            var data = JSON.parse(e);
            $('#prof').empty();
            $('#prof').append(`<option value="" selected  disabled>Escolha</option>`);
            data.forEach(function (item, index) {
                item.forEach(function (item2, index2) {
                    $('#prof').append(`
                    <option  id="prof" value="${item2.nome_curso}">${item2.nome_completo}</option>
                    `)
                    $('#prof').on('change', function () {
                        var curso = $('#prof option:selected').val();
                        $('#nome_curso').val(curso);
                    });
                })
            })
        }
    })
}
