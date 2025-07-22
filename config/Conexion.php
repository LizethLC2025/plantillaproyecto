<?php
require_once "global.php"; // Incluimos las constantes de global.php

// Clase para manejar la conexión a la base de datos
class Conexion
{
    public static $con; // Propiedad estática para almacenar la conexión

    public function __construct()
    {
        try {
            // Parámetros de conexión desde global.php
            self::$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            // Configuración de caracteres
            self::$con->query("SET NAMES '" . DB_ENCODE . "'");

            // Verificar errores de conexión
            if (mysqli_connect_errno()) {
                // Solo imprimir un mensaje si hay un error de conexión grave y detener la ejecución
                printf("Fallo la conexión a la base de datos: %s\n", mysqli_connect_error());
                exit();
            }
            // ¡IMPORTANTE! No debe haber aquí ningún 'else' con 'printf' o 'echo'.
            // La línea comentada de "Conexión a la base de datos exitosa" debe estar completamente ausente o comentada.
        } catch (Exception $e) {
            // Manejo de otras excepciones de conexión
            die("Error: " . $e->getMessage());
        }
    }

    // Método para obtener la instancia de la conexión
    public static function conectar()
    {
        if (self::$con == null) {
            new Conexion(); // Si no hay conexión, crea una nueva
        }
        return self::$con;
    }

    // Método para ejecutar consultas SQL (SELECT, INSERT, UPDATE, DELETE)
    public static function ejecutarConsulta($sql)
    {
        $query = self::$con->query($sql);
        return $query;
    }

    // Método para ejecutar consultas y retornar el ID del último insert
    public static function ejecutarConsulta_retornarID($sql)
    {
        $query = self::$con->query($sql);
        $id = self::$con->insert_id;
        return $id;
    }

    // Método para limpiar/escapar cadenas de texto para evitar inyecciones SQL
    public static function limpiarCadena($str)
    {
        // Asegurarse de que la conexión existe antes de intentar limpiar
        if (self::$con === null) {
            new Conexion(); // Si no hay conexión, crea una nueva
        }
        $str = self::$con->real_escape_string($str);
        return $str;
    }

    // Método para cerrar la conexión a la base de datos
    public static function cerrar()
    {
        if (self::$con !== null) {
            self::$con->close();
            self::$con = null; // Reiniciar la conexión a null para futuras conexiones
        }
    }
}
