$(document).ready(function() {
    $('table.mat-datatable').DataTable();
    $('table.default-datatable').DataTable();
    // Alternative pagination
    $('table.datatable-pagination').DataTable({
        pagingType: "simple",
        language: {
            paginate: {'siguiente': 'Next &rarr;', 'anterior': '&larr; Prev'}
        }
    });
} );