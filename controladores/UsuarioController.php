<?php
session_start();

require_once "../config/global.php";
require_once "../config/Conexion.php";
require_once "../modelos/Usuario.php";

$usuario = new Usuario();

$email = isset($_POST["logina"]) ? Conexion::limpiarCadena($_POST["logina"]) : "";
//$clave_ingresada = isset(($_POST["clavea"])) ? Conexion::limpiarCadena($_POST["clavea"]) : "";
$clave_ingresada = isset(($_POST["clavea"])) ? $_POST["clavea"] : ""; // Removido limpiarCadena() para la clave

$op = isset($_GET["op"]) ? $_GET["op"] : "";

switch ($op) {
    case 'verificar':
        // *** INICIO DE LA SECCIÓN DE DEPURACIÓN EN CONTROLADOR ***
        error_log("Intento de login con email (desde controlador): " . $email);
        error_log("Contraseña de texto plano recibida (desde controlador): " . $clave_ingresada);
        // *** FIN DE LA SECCIÓN DE DEPURACIÓN EN CONTROLADOR ***

        $fila = $usuario->verificar($email, $clave_ingresada);

        if ($fila) {
            $_SESSION['idusuario'] = $fila['idusuario'];
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['apellido'] = $fila['apellido'];
            $_SESSION['email'] = $fila['email'];
            $_SESSION['idrol'] = $fila['idrol'];

            if ($_SESSION['idrol'] == 1) { // Administrador
                $redirect_url = PRO_URL . "/vistas/categoria.php";
                echo json_encode(['status' => 'success', 'redirect' => $redirect_url]);
            } else { // Usuario Normal
                $redirect_url = PRO_URL . "/vistas/portafolios_principal.php";
                echo json_encode(['status' => 'success', 'redirect' => $redirect_url]);
            }
        } else {
            $_SESSION['login_error'] = "Usuario o contraseña incorrectos.";
            echo json_encode(['status' => 'error', 'message' => 'Usuario o contraseña incorrectos.']);
        }
        break;

    case 'salir':
        session_unset();
        session_destroy();
        echo json_encode(['status' => 'success', 'message' => 'Sesión cerrada','redirect' => PRO_URL . "/vistas/login.php"]);
        break;
}
