<?php 

$Nombre = $_POST ['Nombre'];
$Sexo = $_POST ['Sexo'];
 
if ($Sexo == "Masculino"){
 print (" Tu nombre es $Nombre y Tu Grupo  es " . $Sexo );
}elseif ($Sexo === "Femenino"){
print ("Tu nombre es $Nombre y tu Sexo es " .$Sexo);
}else{
    print ("No coninside la informacion");
}


?>