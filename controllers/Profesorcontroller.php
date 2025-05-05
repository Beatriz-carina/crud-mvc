<?php

require_once __DIR__ .'/../model/Profesor.php';

class Profesorcontroller{

    private $profesor;

    public function __construct() {
        $this->profesor = new profesor();
    }

    public function index() {
        $profesores = $this->profesor->all();
        include __DIR__ .'/../views/profesores/index.php';
    }

    public function find($id_codigo) {
        $profesor = $this->profesor->find($id_codigo);
        include __DIR__.'/../views/profesores/editar.php';
 
    }
    public function update($id_codigo,$NombreApellido,$correo){
    $userUpdate=$this->profesor->update($id_codigo,$NombreApellido,$correo);
    header('Location:index.php');

}
 public function create (){
     include __DIR__ . '/../views/profesores/create.php';


 }
  public  function store($data){
    $userCreate=$this->profesor->store($data);
    header('Location:index.php');


  }
}

?>
