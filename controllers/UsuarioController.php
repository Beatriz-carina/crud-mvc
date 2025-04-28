<?php

require_once 'model/Usuario.php';

class UsuarioController {

    private $usuario;

    public function __construct() {
        $this->usuario = new usuario();
    }

    public function index() {
        $usuarios = $this->usuario->all();
        include 'views/usuarios/index.php';
    }

    public function find($id) {
        $usuario = $this->usuario->find($id);
        include 'views/usuarios/editar.php';
 
    }
    public function update($id,$name,$lastName){
    $userUpdate=$this->usuario->update($id,$name,$lastName);
    header('Location:index.php');

}
}

?>
