<?php 

class conexion{
    private $servidor="localhost";
    private $usuario ="root";
    private $contraseña="";
    private $conexion;

    public function __construct()
    {
        try{
            $this->conexion=new PDO("mysql:host=$this->servidor;dbname=Datos",$this->usuario,$this->contraseña);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Conexion Establecida";
        }
        catch(PDOException $e){
            return "Falla de conexion " .$e;
        }
    }
    public function ejecutar($sql){//insertar/delete/actualizar
        $this ->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }
}