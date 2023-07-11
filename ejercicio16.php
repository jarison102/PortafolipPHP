<?php 

$Numero1 = $_POST['Primer_Numero'];
$Numero2 = $_POST['Segundo_Numero'];

if($_POST){
    if($Numero1 + $Numero2 ){
        echo $Numero1 - $Numero2 ." Es correcto la division ";
    }else if($Numero1 && $Numero2 % 2 == 0){
        echo "Error";

    }

}



?>