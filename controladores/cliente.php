<?php
require_once "../modelos/Cliente.php";

// Creamos instancia del modelo
$cliente = new Cliente();

// Recibimos datos del formulario (aseguramos que vienen limpiados)
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
$apellido = isset($_POST["apellido"]) ? limpiarCadena($_POST["apellido"]) : "";
$tipo_documento = isset($_POST["tipo_documento"]) ? limpiarCadena($_POST["tipo_documento"]) : "";
$num_documento = isset($_POST["num_documento"]) ? limpiarCadena($_POST["num_documento"]) : "";
$direccion = isset($_POST["direccion"]) ? limpiarCadena($_POST["direccion"]) : "";
$telefono = isset($_POST["telefono"]) ? limpiarCadena($_POST["telefono"]) : "";
$email = isset($_POST["email"]) ? limpiarCadena($_POST["email"]) : "";
$idcliente = isset($_POST["idcliente"]) ? limpiarCadena($_POST["idcliente"]) : "";

// Operación solicitada por GET
switch ($_GET["op"]) {
    case 'guardar':
        if (empty($idcliente)) {
            $respuesta = $cliente->insertar($nombre, $apellido, $tipo_documento, $num_documento, $direccion, $telefono, $email);
            echo $respuesta ? "Cliente registrado correctamente" : "Error al registrar cliente";
        } else {
            $respuesta = $cliente->editar($idcliente, $nombre, $apellido, $tipo_documento, $num_documento, $direccion, $telefono, $email);
            echo $respuesta ? "Cliente actualizado correctamente" : "Error al actualizar cliente";
        }
        break;

    case 'eliminar':
        $respuesta = $cliente->eliminar($idcliente);
        echo $respuesta ? "Cliente eliminado" : "No se pudo eliminar";
        break;

    case 'mostrar':
        $datos = $cliente->mostrar($idcliente);
        echo json_encode($datos);
        break;

    case 'listar':
        $respuesta = $cliente->listar();
        $datos = [];
        while ($reg = $respuesta->fetch_object()) {
            $datos[] = $reg;
        }
        echo json_encode($datos);
        break;
}
?>
