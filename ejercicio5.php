<?php 

$Edad = $_POST['Edad'];
$Ingresos = $_POST['ingresos'];
$Nombre = $_POST ['Nombre'];
$Grupo =$_POST['Grupo'];



if ($Edad > 16 && $Ingresos >= 1000){  
print_r ("Eres mayor de edad y tienes mas o 1000 puedes tributar");
}
else{
    printf("No tienes alguno de los campos necesarios No puede tributar");
}

print_r(" Su nombre es " . $Nombre . " Y su edad es " . $Edad . " Y su grupo favorito es " .$Grupo)
?>