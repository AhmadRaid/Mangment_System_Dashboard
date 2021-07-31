$(document).ready(function () {
    $("table").DataTable({
        language: {
            search: "البحث",
            zeroRecords: "لا يوجد نتائج لعملية البحث",
            infoEmpty: "لا يوجد بيانات لإطهارها ",
            emptyTable: "No data available in table",
            info: "إظهار _START_ من _END_ إلى _TOTAL_ من البيانات",
            lengthMenu: "إظهار _MENU_ من البيانات",
            paginate: {
                next: "التالي ",
                previous: "السابق",
            },
            infoFiltered: "",
            emptyTable: "لا يوجد أي بيانات",
        },
    });

});
