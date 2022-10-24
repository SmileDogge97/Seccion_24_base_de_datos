<?php

class Alumno{
    private $id;
    private $nombre;

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function toArray($access =''){
        if($access=='total'){
            return array(
            'id'=> $this->id,
            'nombre'=>$this->nombre
            );
        } else {
            return array(
                'id'=> $this->id,
                );
        }
        
    }
}

?>