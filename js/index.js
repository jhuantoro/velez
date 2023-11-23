jQuery(document).ready(function(){
    
    $(window).scroll(function () {
        if($(this).scrollTop() < 510){
        $('header').removeClass('mnustck');
        }else{
        $('header').addClass('mnustck');
        }
    });

});
jQuery(document).ready(function ($) {
    $("#tablaSelector").change(function () {
        let selectedTable = $(this).val();

        // Oculta todos los formularios
        $("form[id^='formulario']").hide();

        // Muestra el formulario seleccionado
        $("#formulario" + selectedTable.capitalize()).show();
    });
    $("#tablaSelector").change(function () {
        let selectedTable = $(this).val();

        // Oculta todas las tablas
        $("table[id^='tabla']").hide();
        // Muestra la tabla seleccionada
        $("#tabla" + selectedTable.capitalize()).show();
    });
    
    $(".listar tr.fila-tabla").click(function () {
        let id = $(this).data("id");
        let image = $(this).data("image");
        let nombre = $(this).find("td").eq(1).html();
        let descripcion = $(this).find("td").eq(3).html();
        let categoria = $(this).find("td").eq(4).html();
        let precio = $(this).find("td").eq(5).html();

        $("form input[name='id']").val(id);
        $("#previewImage").attr("src", image); // Actualiza la imagen mostrada
        $("form input[name='nombre']").val(nombre);
        $("form input[name='descripcion']").val(descripcion);
        $("form input[name='categoria']").val(categoria);
        $("form input[name='precio']").val(precio);
    });
});

String.prototype.capitalize = function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
};

