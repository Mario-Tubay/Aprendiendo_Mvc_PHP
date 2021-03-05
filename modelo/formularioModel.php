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
    public function getClientesxID($id)
    {
       $query="SELECT * from cliente WHERE cedula = ".$id;
       $result = $this->db->query($query);
       while($row=$result->fetch(PDO::FETCH_ASSOC))
       {
        $this->cliente[] = $row;
       }
       return  $this->cliente;
    }
    public function insert($ced, $nombre, $telefono, $correo){
        $sql="insert into cliente (cedula, nombre, telefono, correo)  values('".$ced."','".$nombre."','".$telefono."','".$correo."');";
        $resultado=$this->db->query($sql);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    public function delete($id){
        $sql="DELETE FROM cliente WHERE cedula='".$id."'";
        $resultado=$this->db->query($sql);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    public function update($ced, $nombre, $correo, $telefono){
        $sql="UPDATE cliente SET nombre= '".$nombre."', correo= '".$correo."', telefono= '".$telefono."' WHERE cedula ='".$ced."'";
        $resultado=$this->db->query($sql);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
}
?>
