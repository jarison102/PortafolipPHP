<?php 

$Numero =$_POST['Numero'];


if($_POST){
if($Numero == 0.0){
    echo "Tu nivel es de inaceptable con una puntuacion de " .$Numero ." Tu dinero es de ". 2400 * 0.0;
}else if ($Numero == 0.4 ){
    echo "Tu nivel es de aceptable con una puntuacion de " .$Numero ." Tu dinero es de ". 2400  * 0.4;
}else if ($Numero >= 0.6){
    echo "Tu nivel es de Meritorio con una puntuacion de " .$Numero ." Tu dinero es de " . 2400 * 0.6;
}else {
    echo "No tienes salario malo";
}

}


?>