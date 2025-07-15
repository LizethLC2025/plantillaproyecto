<?php
//Llamo al archivo global.php
require_once "global.php";

//Creo una variable de tipo conexión para
//conectarme a la base de datos 
$conexion = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
//Creamos una variable para almacenar la conexión 
mysqli_query($conexion, 'SET NAMES"'.DB_ENCODE.'"');
//Verificamos si la conexión si la base de datos fue exitosa
if(mysqli_connect_errno())
{
    printf("Fallo la conexión a la base de datos: %s/n", mysqli_connect_error());
    exit();
}else{
    printf("conexión a la base de base de datos exitosa: %s/n", DB_NAME);
}

//Definir un conjunto de funciones que nos ayuden a la consulta de la base de datos
if(!function_exists('ejecutarConsulta')){
    function ejecutarConsulta($sql){
        global $conexion; 
        //creo una variable para almacenar el resultado de la consulta
        $query = $conexion->query($sql);
        //Retorno el resultado de la consulta
        return $query;

    }

    //Creo una funcion que me permita obtener una solo fila de una tabla de la base de datos
    function ejecutarConsultaSimpleFila ($sql){
        // Conectamos a la base de datos
        global $conexion;
        //Creo una variable para alamacenar el resultado 
        $query = $conexion->query($sql);
        //obtengo una fila de la consulta
        $row= $query-> fetch_assoc();
        //Retorno la fila obtenida
        return $row;
    



    }
    //Creo una funcion para obetener el id de una consultao un registro 
    function ejecutarConsulta_retornarID($sql){
        //Conectamos a la base de datosglobal
        global $conexion;
        //Creo una variable donde guardo la consulta 
        $query= $conexion ->query($sql);
        return $conexion->insert_id;

    }
    //Creamos una funcion para limpiar los campos de los input
    function limpiarCadena($str){
        //conectamos a la base de datos 
        global $conexion;
        //retorno el valor del campo limpio
        $str = mysqli_real_escape_string($conexion, trim($str));
        //retornamos el valor
        return htmlspecialchars($str);
        
    }

}

?> 





