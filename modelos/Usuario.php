<?php
// Incluimos el archivo de conexión a la base de datos
require_once "../config/Conexion.php"; // Asegúrate de que esta ruta sea correcta

class Usuario
{
    // Implementamos nuestro constructor
    public function __construct()
    {
        // Constructor vacío.
    }

    // Método para verificar si el usuario existe y las credenciales son correctas
    // Se usará el 'email' como el campo de login.
    public function verificar($email, $clave_ingresada)
    {
        // Buscamos al usuario por su email y que esté activo
        $sql = "SELECT idusuario, nombre, apellido, email, password, activo FROM usuario WHERE email = '$email' AND activo = 1";
        $result = ejecutarConsultaSimpleFila($sql); // ejecutarConsultaSimpleFila es una función global de Conexion.php

        if ($result) {
            // Si se encontró el usuario, verificamos la contraseña encriptada
            // password_verify() es la función correcta para comparar la clave ingresada
            // con la clave encriptada guardada en la base de datos.
            if (password_verify($clave_ingresada, $result['password'])) {
                return $result; // Devolvemos los datos del usuario si la clave coincide y está activa
            } else {
                return false; // Contraseña incorrecta
            }
        }
        return false; // Usuario no encontrado o inactivo
    }

    // Método para insertar un nuevo usuario (útil si necesitas una función de registro en el futuro)
    public function insertar($nombre, $apellido, $email, $password)
    {
        // Encriptar la contraseña antes de guardarla en la base de datos
        // Siempre usa password_hash() para almacenar contraseñas de forma segura.
        $clave_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (nombre, apellido, email, password, activo) VALUES ('$nombre', '$apellido', '$email', '$clave_hash', 1)";
        return ejecutarConsulta($sql); // ejecutarConsulta es una función global de Conexion.php
    }

    // Métodos adicionales (opcionales):
    // public function mostrar($idusuario){ ... }
    // public function listar(){ ... }
    // public function activar($idusuario){ ... }
    // public function desactivar($idusuario){ ... }
    // Estos serían similares a los que ves en Categoria.php o Cliente.php si necesitas una gestión completa de usuarios.
}
?>