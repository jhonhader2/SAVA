function init() {
    $("#nuevo_caso").on("submit", function (e) {
        enviarTicket(e);
    });
}

$(document).ready(function () {
    $('.summernote').summernote({
        // default: 'en-US'
        lang: 'es-ES',
        height: 200,
    });

    $.post("../../controllers/categoria.php?op=combo", function (data, status) {
        $('#categoria').html(data);
    });
});

function enviarTicket(e) {
    e.preventDefault();
    var formData = new FormData($("#nuevo_caso")[0]);

    $.ajax({
        url: "../../controllers/ticket.php?op=insert",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function (datos) {
            $('#titulo').val("");
            $('#detalles').summernote('reset');

            swal({
                title: "Correcto!",
                text: "Se ha registrado el Ticket!",
                type: "success",
                confirmButtonClass: "btn-success",
                confirmButtonText: "Cerrar"
            });
        }
    });
}

init();