// Función que se ejecuta al cargar la página de login
function init() {
    // Enfocar en el campo de email/usuario al cargar la página
    // Esto mejora la experiencia del usuario, el cursor estará listo para escribir.
    $("#logina").focus();

    // Cuando el formulario con id "frmAcceso" (de login.php) es enviado
    $("#frmAcceso").on('submit', function(e) {
        e.preventDefault(); // ¡Importante! Evita que el formulario se envíe de forma tradicional (recargando la página)

        var logina = $("#logina").val(); // Obtiene el valor del campo de email/usuario
        var clavea = $("#clavea").val(); // Obtiene el valor del campo de contraseña

        // Realiza una solicitud AJAX (Asynchronous JavaScript and XML) al controlador PHP
        // $.post() es un atajo de jQuery para enviar datos POST.
        // La URL apunta a nuestro controlador de usuario y especifica la operación "verificar".
        $.post("../controladores/UsuarioController.php?op=verificar",
            { "logina": logina, "clavea": clavea }, // Datos a enviar al controlador
            function(data) {
                // Esta función se ejecuta cuando el controlador PHP responde.
                // En nuestro caso, el controlador se encarga directamente de la redirección
                // (ya sea a categorias.php si el login es exitoso o a login.php con error).
                // Por lo tanto, no necesitamos hacer ninguna redirección aquí en JavaScript.
                // La respuesta 'data' podría usarse para mensajes más complejos, pero no es necesario aquí.
            }
        );
    });
}

// Llama a la función init cuando el documento (la página web) esté completamente cargado.
$(document).ready(function() {
    init();
});