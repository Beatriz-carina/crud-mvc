<?php

require_once __DIR__ .'/../config/database.php';

class Profesor{
    private $conexion;
    public function __construct() {
        $this->conexion = Database::conectar();
    }

    public function all(){
        $stmt = $this->conexion->query("SELECT * FROM profesor");
        $profesores = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $profesores;
    }

    public function find($id_codigo){
        $stmt = $this->conexion->query("SELECT * FROM profesor WHERE id_codigo = $id_codigo");
        $profesor = $stmt->fetch(PDO::FETCH_ASSOC);
        return $profesor;
    }
    public function update ($id_codigo,$nombreApellido,$correo){
        $stmt=$this->conexion->prepare("UPDATE profesor SET NombreApellido=?,correo=? WHERE id_codigo=?");
        return $stmt->execute([$nombreApellido,$correo,$id_codigo]);
       
    }
    public function store($data){

        $query= "INSERT INTO profesor(id_codigo, NombreApellido, correo) VALUES(?,?,?)";
     
        $stmt = $this->conexion->prepare($query);
     
        return $stmt->execute([$data ['id_codigo'], $data ['NombreApellido'], $data ['correo']]);
     
        }
      

}


?>
