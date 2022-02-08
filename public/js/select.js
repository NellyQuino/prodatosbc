$(function() {
    $('#select-project').on('change', onSelectProjectChange);

});

function onSelectProjectChange() {
    var eje_id = $(this).val();

    $.get('/api/proyecto/' + eje_id + '/niveles', function(data) {
        var html_select = '<option value="">Seleccione una estrategia</option>';

        for (var i = 0; i < data.length; ++i)
            html_select += '<option value="' + data[i].id + '">' + data[i].name + '</option>';

        $('#select-level').html(html_select);
    });
}