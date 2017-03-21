$(document).ready(function () {
    $('#btn-add-detail').click(function () {
       var html = $('#color_size_add').html();
        $(html).insertBefore('#color_size_add');
    });
})
