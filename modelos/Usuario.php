<?php
require_once "../config/Conexion.php";

class Usuario
{
    public function __construct()
    {
    }

    public function verificar($email, $clave_ingresada)
    {
        $email_escapado = Conexion::limpiarCadena($email);
        global $conexion; // Necesario si $conexion no se pasa como parámetro o es una propiedad estática accesible

        $sql = "SELECT idusuario, nombre, apellido, email, password, activo FROM usuario WHERE email = '$email_escapado' AND activo = 1"; // Asegúrate de que 'password' es el nombre de tu columna

        $query_result = Conexion::ejecutarConsulta($sql);

        // *** INICIO DE LA SECCIÓN DE DEPURACIÓN EN MODELO ***
        if ($query_result && $query_result->num_rows > 0) {
            $result_row = $query_result->fetch_assoc();
            error_log("Usuario encontrado en DB (desde modelo): " . $result_row['email']);
            error_log("Hash de la DB para este usuario (desde modelo): " . $result_row['password']);
            error_log("Contraseña plana recibida para password_verify (desde modelo): " . $clave_ingresada);

            if (password_verify($clave_ingresada, $result_row['password'])) {
                error_log("password_verify: La contraseña PLANA coincide con el hash de la DB.");
                return $result_row;
            } else {
                error_log("password_verify: La contraseña PLANA NO coincide con el hash de la DB. Contraseña ingresada: '" . $clave_ingresada . "' Hash DB: '" . $result_row['password'] . "'");
                return false;
            }
        } else {
            error_log("Usuario no encontrado o inactivo en la base de datos para email: " . $email_escapado);
            return false;
        }
        // *** FIN DE LA SECCIÓN DE DEPURACIÓN EN MODELO ***
    }

    // ... (resto de tus métodos, como insertar, etc.) ...
}
