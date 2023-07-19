<?php


class conexion{
    private $servidor="162.241.203.97";
    private $usuario="crumbcco_Relacionnuevabase";
    private $contrasenia="mQis38MNl8ad";
    private $conexion;

    public function __construct(){
        try{
            $this->conexion=new PDO("mysql:host=$this->servidor;dbname=crumbcco_datassa3",$this->usuario,$this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e){
            return "falla de conexion ".$e;
        }
    }
    public function ejecutar($sql){//inserta, borra o actualiza
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}


?>