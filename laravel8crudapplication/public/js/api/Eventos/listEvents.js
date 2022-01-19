$(function () {
    getEvents();
})

$("#pesq").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#listEvents tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

function getEvents() {
    $.ajax({
        method: 'GET',
        url: 'http://127.0.0.1:8000/api/getEvents',
        success: function (e) {
            let data = JSON.parse(e);
            $(".listEvents").remove();
            data.forEach(function (item, index) {
                $("#listEvents").append(`<tr class="listEvents">
                <th scope="row" class=" text-center align-middle">${item.titulo}</th>
                <th class="text-center align-middle">${item.data}</th>
                <th class="text-center align-middle">${item.hora}</th>
                <th class="text-center align-middle">${item.obs}</th>
            </tr> 
            `)
            })
        }
    })
}
