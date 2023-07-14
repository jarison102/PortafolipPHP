<?php 
$numero=$_POST['numero'];
$NumeroRomano=$_POST['NumeroRomano'];

if($_POST){
    if($numero == "4"){  
        echo "Tu numero en numero normal es " . $numero;
}else if("9"){
        echo "Tu numero en normal es " .$numero;

}else{
    echo "Coloca un numero";
}if($NumeroRomano == "IV"){
    echo "Tu numero  ROMANO es " . 4;
}else if($NumeroRomano =="IX" ){
   echo "Tu numero en ROMANO es " . 9;
}else{
    echo "paila";
}
}


?>