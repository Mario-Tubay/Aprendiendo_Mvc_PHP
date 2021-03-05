<?php
require_once("modelo/formularioModel.php");
class formularioController{

  private $model;
	function __construct(){
        $this->model=new cliente_modelo();
    }
    static function  index(){
    	$cliente 	=	new cliente_modelo();
      $datos =$cliente->getClientes();
		  require_once("vista/index.php");
    }
    static function  insert(){
    	$ced = $_POST['cedula'];
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
      $cliente 	=	new cliente_modelo();
      $datos = $cliente->insert($ced, $nombre, $correo, $telefono);
      header("location: http://localhost/tallerProyecto/");
    }
    static function delete(){
      $ced = $_GET["id"];
      $cliente 	=	new cliente_modelo();
      $cliente->delete($ced);
      header("location: http://localhost/tallerProyecto/");
    }
    static function editar(){
      $cliente 	=	new cliente_modelo();
      $ced = $_GET['id'];
      $datos =$cliente->getClientesxID($ced);
      require_once("vista/editar.php");
    }
    static function update(){
      $cliente 	=	new cliente_modelo();
      $ced = $_POST['cedula'];
      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      $correo = $_POST['correo'];
      $datos =$cliente->update($ced, $nombre, $telefono, $correo);
      header("location: http://localhost/tallerProyecto/");
    }

}


?>
