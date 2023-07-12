<?php 

$Refrescos = ['Cocacola','Pépsi','Corona','Postobon','Sprite', '7'];

for($r = 0; $r <= 5; $r++){
echo $Refrescos[$r] . "<br>";
}

$Materias=['Matematicas','Física','Química', 'Historia','Lengua'];

for($m=0; $m <4; $m++){

    echo $Materias[$m] ."<br>";

}

$Deportes=['Natacion','Boxeo','Ciclismo','Canto','Karate','Yudo'];

foreach ($Deportes as $posicion => $Cultura){
    echo "Mi deporte favorito es $Cultura y ocupa la posicion $posicion <br>";
}

$Nota=$_POST['Nota'];

$Asignaturas = ['Matematicas','Física','Química', 'Historia','Ingles'];

if($_POST){
    if($Nota){

        for($A=0; $A <=4; $A++){
            echo "En " .$Asignaturas[$A] ." A sacado " . $Nota ."<br>";
        
        }
    }
    
}



$Loteria=['4','2'];

if($Loteria ){
    for($l=0; $l <=1; $l++){
        echo "El ganador de la loteria es " .$Loteria[$l] ."<br>";
    }
}

$Numeros=[1,2,3,4,5,6,7,8,9,10];

$length = count($Numeros);

$listaInvertida = array();

for($s=$length -1;$s >= 0; $s--){
   if($Numeros[$s]==0){
    break;
   }
    $listaInvertida[] = $Numeros[$s];
}
// Mostrar la lista invertida
foreach ($listaInvertida as $elemento) {
    echo $elemento . " ";
}





?>