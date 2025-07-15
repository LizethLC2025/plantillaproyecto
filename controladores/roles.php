<?php
// Incluimos el archivo Roles.php
require_once "../modelos/Roles.php";

// Instanciamos la clase Roles
$roles = new Roles();

// Definimos variables para capturar los datos enviados por POST
$idroles = isset($_POST["idroles"]) ? limpiarCadena($_POST["idroles"]) : "";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
$condicion = isset($_POST["condicion"]) ? limpiarCadena($_POST["condicion"]) : "";

// Generamos un switch para determinar la acción a realizar
switch ($_GET["op"]) {
    case 'guardaryeditar':
        if (empty($idroles)) {
            $rspta = $roles->insertar($nombre, $condicion);
            echo $rspta ? "Rol registrado con éxito" : "No se pudo registrar el rol";
        } else {
            $rspta = $roles->editar($idroles, $nombre, $condicion);
            echo $rspta ? "Rol editado con éxito" : "No se pudo editar el rol";
        }
        break;

    case 'desactivar':
        $rspta = $roles->desactivar($idroles);
        echo $rspta ? "Rol desactivado" : "No se pudo desactivar el rol";
        break;

    case 'activar':
        $rspta = $roles->activar($idroles);
        echo $rspta ? "Rol activado" : "No se pudo activar el rol";
        break;

    case 'mostrar':
        $rspta = $roles->mostrar($idroles);
        // Convertir el resultado en JSON
        echo json_encode($rspta);
        break;
        

}

?>
