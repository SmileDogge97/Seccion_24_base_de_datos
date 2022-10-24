<?php

include_once '../api.php';

$api = new API();

if(isset($_GET['id']) && isset($_GET['nombre'])){
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $res = $api->actualizarAlumno($id, $nombre);

    if($res){
        echo json_encode(array('response' => 'Alumno actualizado'));
    } else {
        echo json_encode(array('response' => 'Error al actualizar el alumno'));
    }
} else{
    echo json_encode(array('error' => 'Faltan datos para actualizar al alumno'));
}


?>