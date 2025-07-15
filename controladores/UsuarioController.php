<?php
// Incluimos el modelo Usuario para poder usar sus métodos de verificación
require_once "../modelos/Usuario.php";
// Incluimos global.php para acceder a constantes si es necesario (ej. PRO_NOMBRE)
require_once "../config/global.php";

// Creamos una instancia de la clase Usuario
$usuario = new Usuario();

// Recogemos los datos enviados por POST desde el formulario de login.
// 'logina' será el nombre del campo para el email/usuario en el formulario HTML.
// 'clavea' será el nombre del campo para la contraseña en el formulario HTML.
// La función 'limpiarCadena' debería estar definida en Conexion.php o global.php.
$email = isset($_POST["logina"]) ? limpiarCadena($_POST["logina"]) : "";
$clave_ingresada = isset($_POST["clavea"]) ? limpiarCadena($_POST["clavea"]) : "";

// Obtenemos la operación solicitada a través de GET (ej. ?op=verificar o ?op=salir).
$op = isset($_GET["op"]) ? $_GET["op"] : "";

// Usamos un switch para manejar las diferentes operaciones (acciones)
switch ($op) {
    case 'verificar':
        // Intentamos verificar las credenciales del usuario usando el método del modelo
        $fila = $usuario->verificar($email, $clave_ingresada);

        if ($fila) {
            // Si la verificación es exitosa ($fila contiene los datos del usuario):
            // Iniciamos la sesión PHP (si no está iniciada ya).
            session_start();
            // Guardamos los datos importantes del usuario en variables de sesión.
            $_SESSION['idusuario'] = $fila['idusuario'];
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['apellido'] = $fila['apellido'];
            $_SESSION['email'] = $fila['email'];
            // Puedes añadir más datos aquí si los necesitas (ej. roles, permisos).

            // Redirigimos al usuario a la página principal del sistema (ej. categorias.php).
            // dirname($_SERVER['PHP_SELF']) ayuda a construir la ruta relativa de forma segura.
            header("Location: " . dirname($_SERVER['PHP_SELF']) . "/../vistas/categorias.php");
            exit(); // ¡Importante! Terminar la ejecución del script después de una redirección.
        } else {
            // Si la autenticación falla ($fila es false):
            // Iniciamos la sesión para poder guardar un mensaje de error.
            session_start();
            // Guardamos el mensaje de error en una variable de sesión.
            $_SESSION['login_error'] = "Usuario o contraseña incorrectos.";
            // Redirigimos de vuelta a la página de login.
            header("Location: " . dirname($_SERVER['PHP_SELF']) . "/../vistas/login.php");
            exit(); // ¡Importante! Terminar la ejecución.
        }
        break;

    case 'salir':
        // Lógica para cerrar la sesión del usuario.
        session_start();      // Asegurarse de que la sesión esté iniciada.
        session_unset();      // Eliminar todas las variables de sesión del usuario.
        session_destroy();    // Destruir la sesión completamente.

        // Redirigir al usuario a la página de login.
        header("Location: " . dirname($_SERVER['PHP_SELF']) . "/../vistas/login.php");
        exit(); // Terminamos la ejecución.
        break;
}
?>