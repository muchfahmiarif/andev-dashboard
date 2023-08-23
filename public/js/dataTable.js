$(document).ready(function () {
    var table = $("#example").DataTable({
        // ajax: "../data/2500.txt",
        deferRender: true,
        scrollX: true,
        scrollY: 500,
        scrollCollapse: true,
        scroller: true,
        buttons: ["copy", "print", "excel", "pdf", "colvis"],
        dom:
            "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
            "<'row'<'col-md-12'tr>>" +
            "<'row'<'col-md-5'i><'col-md-7'p>>",
        lengthMenu: [
            [5, 10, 25, 50],
            [5, 10, 25, 50],
        ],
    });

    table.buttons().container().appendTo("#example_wrapper .col-md-6:eq(0)");
});

$(document).ready(function () {
    var table = $("#table-2").DataTable({
        // ajax: "../data/2500.txt",
        deferRender: true,
        scrollX: true,
        scrollY: 500,
        scrollCollapse: true,
        scroller: true,
        buttons: ["copy", "print", "excel", "pdf"],
        dom:
            "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
            "<'row'<'col-md-12'tr>>" +
            "<'row'<'col-md-5'i><'col-md-7'p>>",
        lengthMenu: [
            [5, 10, 25, 50],
            [5, 10, 25, 50],
        ],
    });

    table.buttons().container().appendTo("#example_wrapper .col-md-6:eq(0)");
});
