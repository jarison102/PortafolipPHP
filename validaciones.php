<?php 

session_start();

$_SESSION["usuario"]="Jarison";
$_SESSION["estatus"]="logueado";

echo "sesion iniciada"."<br>";

echo "Usuario: ". $_SESSION["usuario"]." estatus: " .$_SESSION["estatus"];


?>