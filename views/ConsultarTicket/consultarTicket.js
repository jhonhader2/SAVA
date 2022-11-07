var tabla;

function init() {

}


$(document).ready(function () {
    $(function () {
        tabla = $('#table-myTickets').dataTable({

            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            "searching": true,
            lengthChange: false,
            colReorder: true,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "ajax": {
                url: '../../controllers/ticket.php?op=listMyTickets',
                type: "post",
                dataType: "json",
                data: {id : 1 },
                error: function (e) {
                    console.log(e.responseText);
                }
            },
            "bDestroy": true,
            "responsive": true,
            "bInfo": true,
            "iDisplayLength": 10,
            "autoWidth": false,
            language: {
                url: '../../public/js/lib/datatables-net/localisation/es_ES.json'
            }
        }).DataTable();
    });
})

init();