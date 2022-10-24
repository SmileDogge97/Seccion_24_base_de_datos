<?php

include_once '../api.php';

$api = new API();

if(isset($_GET['id']) && isset($_GET['nombre'])){
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $res = $api->nuevoAlumno(array('id'=>$id, 'nombre' => $nombre));

    if($res){
        echo json_encode(array('response'=>'Nuevo alumno registrado'));
    } else {
        echo json_encode(array('response'=>'Error al registrar alumno'));
    }
} else{
    echo json_encode(array('error' => 'Faltan datos para registrar un nuevo alumno'));
}
?>