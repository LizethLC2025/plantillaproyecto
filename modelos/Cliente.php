<?php
//Incluimos el archivo de conexión a la base de datos
require "../config/Conexion.php";

//Creo la clase Cliente
class Cliente {
    //Definimos un constructor
    public function __construct() {

    }

    //Método para insertar un cliente en la base de datos
    public function insertar($nombre, $tipo_documento, $num_documento, $direccion, $telefono, $email) {
        $sql = "INSERT INTO cliente (nombre, tipo_documento, num_documento, direccion, telefono, email, condicion)
                VALUES ('$nombre', '$tipo_documento', '$num_documento', '$direccion', '$telefono', '$email', '1')";
        return ejecutarConsulta($sql);
    }

    //Método para editar un cliente
    public function editar($idcliente, $nombre, $tipo_documento, $num_documento, $direccion, $telefono, $email) {
        $sql = "UPDATE cliente 
                SET nombre = '$nombre', tipo_documento = '$tipo_documento', num_documento = '$num_documento', 
                    direccion = '$direccion', telefono = '$telefono', email = '$email' 
                WHERE idcliente = '$idcliente'";
        return ejecutarConsulta($sql);
    }

    //Método para desactivar un cliente
    public function desactivar($idcliente) {
        $sql = "UPDATE cliente SET condicion = 0 WHERE idcliente = '$idcliente'";
        return ejecutarConsulta($sql);
    }

    //Método para activar un cliente
    public function activar($idcliente) {
        $sql = "UPDATE cliente SET condicion = 1 WHERE idcliente = '$idcliente'";
        return ejecutarConsulta($sql);
    }

    //Método para mostrar los datos de un cliente específico
    public function mostrar($idcliente) {
        $sql = "SELECT * FROM cliente WHERE idcliente = '$idcliente'";
        return ejecutarConsultaSimpleFila($sql);
    }

    //Método para listar todos los clientes
    public function listar() {
        $sql = "SELECT * FROM cliente";
        return ejecutarConsulta($sql);
    }

    //Método para seleccionar solo los clientes activos
    public function select() {
        $sql = "SELECT * FROM cliente WHERE condicion = 1";
        return ejecutarConsulta($sql);
    }
}
?>
