<?php

    include_once 'apimodel.php';
    include_once 'alumno.php';

    class API extends APIModel{

        function nuevoAlumno($datos){
            $nuevoAlumno = new Alumno();
            $nuevoAlumno->setNombre($datos['nombre']);
            $nuevoAlumno->setId($datos['id']);

            return $this->newItem($nuevoAlumno);
        }

        function obtenerAlumnos(){
            return $this->getAll();
        }

        function obtenerAlumnosPorId($id){
            return $this->getById($id);
        }

        function actualizarAlumno($id, $nombre){
            $nuevoAlumno = new Alumno();
            $nuevoAlumno->setNombre($nombre);
            $nuevoAlumno->setId($id);

            //return $this->updateItem($id, $nuevoAlumno);
            return $this->updateItem($nuevoAlumno);
        }

        function eliminarAlumno($id){
            return $this->deleteItem($id);
        }
    }
?>