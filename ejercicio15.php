<?php 

$Numero=$_POST['Numero'];

if($_POST){
if($Numero % 2 == 0 ){
 echo $Numero  ."Es par";
}else if($Numero){
    echo $Numero ." Es inpar error";
}
}

?>