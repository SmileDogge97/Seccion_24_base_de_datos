<?php

include_once '../api.php';

$api = new API();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $api->obtenerAlumnosPorId($id);
} else{
    echo json_encode(array('error' => 'Faltan un id para buscar al alumno'));
}


?>