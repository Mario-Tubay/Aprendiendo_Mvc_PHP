<?php
require_once 'controlador/formularioController.php';
if(isset($_GET['m'])){
    $metodo =   $_GET['m'];
    if($metodo=='insert'){
        formularioController::insert();
    }else if($metodo=='delete'){
        formularioController::delete();
    }else if($metodo == 'editar'){
        formularioController::editar();
    }else if($metodo == 'update'){
        formularioController::update();
    }
}else{
    formularioController::index();  
}
?>
