<?php
if($_GET){

//Recivir informacion del formulario metodo post
    $Nombre=$_GET['txtNombre'];
    $Edad=$_GET['intEdad'];
    $Trabajo =$_GET['textTrabajo'];
    $Pais =$_GET['textPais'];
    $Lenguajes=$_GET['txtLenguajes'];
    $EstadoCivil=$_GET['txtEstado'];
    $Fecha= $_GET['date'];

print("Mi Nombre es " . $Nombre . " y mi edad es " . $Edad . ". Trabajo en " . $Trabajo . ". Soy del país " . $Pais . ". Manejo estos lenguajes: " . $Lenguajes . ". Soy " . $EstadoCivil . ". Fecha de registro: " . $Fecha);
}
?>