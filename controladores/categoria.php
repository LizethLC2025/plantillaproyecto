<?php
// Incluimos el archivo Categoria.php
require_once "../modelos/Categoria.php";
//Instanciamos la clase categoria 
$categoria= new Categoria();   
//Definimos una variable para almacenar el idcategoria
$idcategoria =isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]) :"";
//definimos una variable para almacenar el nombre 
$nombre = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]): "";
//definimos una variable para almacenar la descripcion 
$descripcion =isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]): "";

//Generamos un switch para determinar la accion a realizar
switch($_GET ["op"]){
    case 'guardaryeditar':
        if (empty($idcategoria)){
            $rspta = $categoria-> insertar($nombre, $descripcion);
            echo $rspta ? "Categoria resgiatrada con exito" : "No se pudo registrar la categoria a la base de datos";
        
        }
        else{
            $rspta = $categoria-> editar($idcategoria, $nombre, $descripcion);
            echo $rspta ? "categoria editada con exito" : "No se pudo editar la categoria";

        }
        break;
        //si elijo la opción desactivar ejecuta esta sección del código
        case 'desactivar':
        $rspta = $categoria->desactivar($idcategoria);
        echo $rspta ? "Categoria desactivada" : "No se pudo desactivar";
        break;
    case 'activar' :
        $rspta = $categoria->activar($idcategoria);
        echo $rspta ? "Categoria activada" : "No se pudo activar";
        break;
        case 'mostrar':
        $rpsta = $categoria->mostrar($idcategoria);
        //Convertir el resultado en JSON
        echo json_encode($rspta);
        break;
        


}

?>