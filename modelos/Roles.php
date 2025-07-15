<?php
//Incluimos el archivo de conexión a la base de datos
require "../config/Conexion.php";

//Creo la clase Roles
class Roles {
    //Definimos un constructor
    public function __construct() {
        // Constructor vacío
    }

    //Método para insertar un rol en la base de datos
    public function insertar($nombre) {
        //Definimos una variable para almacenar la consulta
        $sql = "INSERT INTO roles (nombre, condicion)
                VALUES ('$nombre', '1')";
        //Retornamos el resultado de la consulta
        return ejecutarConsulta($sql);
    }

    //Método para editar un rol
    public function editar($idrol, $nombre) {
        //Definimos una variable para almacenar la consulta
        $sql = "UPDATE roles SET nombre = '$nombre'
                WHERE idrol = '$idrol'";
        return ejecutarConsulta($sql);
    }

    //Método para activar un rol
    public function activar($idrol) {
        //Definimos una variable para almacenar la consulta
        $sql = "UPDATE roles SET condicion = 1
                WHERE idrol = '$idrol'";
        return ejecutarConsulta($sql);
    }

    //Método para desactivar un rol
    public function desactivar($idrol) {
        //Definimos una variable para almacenar la consulta
        $sql = "UPDATE roles SET condicion = 0
                WHERE idrol = '$idrol'";
        return ejecutarConsulta($sql);
    }

    //Método para mostrar los datos de un rol
    public function mostrar($idrol) {
        //Definimos una variable para almacenar la consulta
        $sql = "SELECT * FROM roles WHERE idrol = '$idrol'";
        return ejecutarConsultaSimpleFila($sql);
    }

    //Método para listar todos los roles
    public function listar() {
        //Definimos una variable donde se va a guardar la consulta
        $sql = "SELECT * FROM roles";
        return ejecutarConsulta($sql);
    }

    //Método para listar solo los roles activos
    public function select() {
        $sql = "SELECT * FROM roles WHERE condicion = 1";
        return ejecutarConsulta($sql);
    }
}
?>
