<?php
class BaseDatos
{
    public static function conexion()
    {
        try {
            $conexion= new PDO('mysql:host=localhost; dbname=envios','root','');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $ex) {
            $ex->getMessage();
        }
        return $conexion;
    }
}
?>
