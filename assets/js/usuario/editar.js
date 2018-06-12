$(function () {
    $('#form_usuario_grupo').submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action')
            , method: "post"
            , data: $(this).serialize()
            , error: function () {
                console.warn("No se pudo realizar la conexión");
            }
            , beforeSend: function (xhr) {
                mostrar_loader();
            }
        }).done(function (response) {
            $('#area_grupos').html(response);
             ocultar_loader();
        });
    });

    $('#unidad_texto').keyup(function () {
        keyword = document.getElementById('unidad_texto').value;
        console.log('buscando:' + keyword);
        $.ajax({
            url: site_url + '/buscador/search_unidad_instituto'
            , method: "post"
            , timeout: 200
            , data: {keyword: keyword}
            , error: function () {
                console.warn("No se pudo realizar la conexión");
            }
        }).done(function (response) {
            $('#unidad_autocomplete').css('display', 'block');
            $('#unidad_autocomplete').html(response);
        });
    });

    $('#categoria_texto').keyup(function () {
        keyword = document.getElementById('categoria_texto').value;
        console.log('buscando:' + keyword);
        $.ajax({
            url: site_url + '/buscador/search_categoria'
            , method: "post"
            , timeout: 200
            , data: {keyword: keyword}
            , error: function () {
                console.warn("No se pudo realizar la conexión");
            }
        }).done(function (response) {
            $('#categoria_autocomplete').css('display', 'block');
            $('#categoria_autocomplete').html(response);
        });
    });
});

function set_value_unidad(item) {    
    var id_unidad = item.getAttribute("data-unidad-id"); 
    var unidad = item.getAttribute("data-unidad-nombre"); 
    document.getElementById('unidad').value = id_unidad;
    document.getElementById('unidad_texto').value = unidad;
    $('#unidad_autocomplete').css('display', 'none');
    $('#unidad_autocomplete').html('');
}


function set_value_categoria(id_categoria, categoria) {
    console.log(categoria);
    document.getElementById('categoria').value = id_categoria;
    document.getElementById('categoria_texto').value = categoria;
    $('#categoria_autocomplete').css('display', 'none');
    $('#categoria_autocomplete').html('');
}
