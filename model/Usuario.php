<?php

require_once __DIR__ .'/../config/database.php';

class Usuario{
    private $conexion;
    public function __construct() {
        $this->conexion = Database::conectar();
    }

    public function all(){
        $stmt = $this->conexion->query("SELECT * FROM usuario");
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $usuarios;
    }

    public function find($id){
        $stmt = $this->conexion->query("SELECT * FROM usuario WHERE id = $id");
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
    public function update ($id,$name,$lastName){
        $stmt=$this->conexion->prepare("UPDATE usuario SET name=?,lastName=? WHERE id=?");
        return $stmt->execute([$name,$lastName,$id]);
       
    }
    public function store($data){

        $query= "INSERT INTO usuario(id, name, lastName) VALUES(?,?,?)";
     
        $stmt = $this->conexion->prepare($query);
     
        return $stmt->execute([$data ['id'], $data ['name'], $data ['lastName']]);
     
        }

}


?>
