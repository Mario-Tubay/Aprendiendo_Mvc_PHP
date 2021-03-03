<?php
include("modelo/formularioModel.php");
if($_GET['accion']=='insert'){
  $ced = $_POST['cedula'];
  $nom = $_POST['nombre'];
  $tlf = $_POST['telefono'];
  $correo = $_POST['correo'];
  include("vista/index.php");

}else{
  $cliente = new cliente_modelo();
  $matrizCliente = $cliente->getClientes();
  include("vista/index.php");
}


?>
