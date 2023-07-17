<?php 

$servidor="localhost";
$usuario="root";
$contraseña="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos`(`id`, `Nombre`, `Ruta`) VALUES (Null,'Stiwis','Cespedes.png')";

    $sql="SELECT * FROM `fotos`";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conexion->exec($sql);

    foreach($resultado as $foto){
        echo $foto['Nombre']. "<br/>";

    }
    echo "conexion establecida";

}catch(PDOException $error){
 echo "Conexion erronea".$error;
}
//hasta aca va la conexion
