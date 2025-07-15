var tabla;

//creo un funcion int que se ejecuta al incio de la aplicación 
function init() {
    mostrarform(false);
}
//llamamos a la funcion guardar y editar 
$("#formulario").on("submit", function (e) {
    guardaryeditar(e);
});

//Creo una función para limpiar el formulario
function limpiar() {
    $("#idcategoria").val("");
    $("#nombre").val("");
    $("#descripcion").val("");
}

//Función para mostrar  el formulario
function mostrarform(flag) {
    limpiar();
    if (flag) {
        $("#listadoregistro").hide();
        $("#formularioregistros").show();
        //$("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
    } else {
        $("#listadoregistro").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

//función para cancelar el formulario
function cancelarform() {
    limpiar();
    mostrarform(false);
}
//Funcion para guardar y editar los datos
function guardaryeditar(e) {
    //nose activa la accion predeterminada del evento
    e.preventDefault();
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../controladores/categoria.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            bootbox.alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }
    });
}

//ejecutamos la función init
init();