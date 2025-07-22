// Función que se ejecuta al cargar la página de login
function init() {
    $("#logina").focus();

    $("#frmAcceso").on('submit', function(e) {
        e.preventDefault();

        var logina = $("#logina").val();
        var clavea = $("#clavea").val();

        $.post("../controladores/UsuarioController.php?op=verificar",
            { "logina": logina, "clavea": clavea },
            function(data) {
                // Parseamos la respuesta JSON del servidor
                var response = JSON.parse(data);

                if (response.status === 'success') {
                    // Si el login fue exitoso, redirige a la URL proporcionada por el servidor
                    window.location.href = response.redirect;
                } else {
                    // Si hubo un error, muestra el mensaje de error (puedes usar SweetAlert2 aquí)
                    alert(response.message); // Por ahora, un simple alert
                    // Si tienes SweetAlert2 configurado, podrías usar:
                    // swal("Error", response.message, "error");

                    // También podrías recargar la página para mostrar el mensaje de sesión de login.php
                    // window.location.reload();
                }
            }
        ).fail(function(jqXHR, textStatus, errorThrown) {
            // Manejar errores de la petición AJAX (ej. el archivo PHP no existe, error de servidor 500)
            alert("Error de conexión con el servidor: " + textStatus + " - " + errorThrown);
        });
    });
}

// Llama a la función init cuando el documento (la página web) esté completamente cargado.
$(document).ready(function() {
    init();
});