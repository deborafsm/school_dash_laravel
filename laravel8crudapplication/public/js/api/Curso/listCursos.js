$(function(){
    allCursos()
})

function allCursos(){
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