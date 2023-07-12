<?php 
$Palabra = $_POST['Palabra'];
$edad = $_POST['edad'];
$Numero = $_POST ['Numero'];
$Numero2 = $_POST['Numero2'];

//for ($NumeroInicial =0; $NumeroInicial < 10; $NumeroInicial++){
//echo "Numero" .$NumeroInicial;
//}


for($i = 0; $i <= 10; $i++){
print $Palabra ."<br>";
}


for($e=1; $e <= 18; $e++)

echo $e ." Tienes estos años"."<br>";

if($Numero <= 0){
    echo "El número debe ser entero positivo.";

}else {
    $impares = array();
    for($N=1; $N <= $Numero;  $N +=2){
        $impares[] =$N;
}
echo "Números impares: " . implode(", ", $impares);

}


if($Numero2 <= 0){
    echo "El número debe ser entero positivo.";
}else{
    $Impares = array();
    for($NU=$Numero2; $NU >= 0; $NU -= 2 ){
        $Impares[] = $NU;
    }
    echo "Numeros impares " . implode(",", $Impares);
}

$chota = "sapos";

for ($k=0; $k <=10; $k++){
print ($chota);
}













?>