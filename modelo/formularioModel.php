<?php
class cliente_modelo
{
    private $db;
    private $cliente;

    public function __construct()
    {
        include("modelo/BaseDatos.php");
        $this->db=BaseDatos::conexion();
        $this->cliente = array();
    }

    public function getClientes()
    {
       $query="SELECT * from cliente";
       $result = $this->db->query($query);
       while($row=$result->fetch(PDO::FETCH_ASSOC))
       {
        $this->cliente[] = $row;
       }
       return  $this->cliente;
    }
    public function insertar($tabla, $datos){
     $consulta="insert into ".$tabla." values(null,". $data .")";
     $resultado=$this->db->query($consulta);
     if ($resultado) {
         return true;
     }else {
         return false;
     }
  }
}
?>
