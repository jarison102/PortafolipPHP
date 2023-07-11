<?php 
$impositivo = $_POST['impositivo'];

if($_POST){
if($impositivo < 10000){
echo "Tu impositivo es de 5% ";
}else if ($impositivo == 10000){
    echo "Tu impositivo es de 15% ";
}else if ($impositivo === 20000){
    echo "Tu impositivo es de 15% ";
}else if ($impositivo == 21000){
    echo "Tu impositivo es de 20% ";
}else if ($impositivo == 35000){
    echo "Tu impositivo es de 35%";
}else if ($impositivo == 36000){
    echo "Tu impositivo es de 30% ";
}else if ($impositivo == 60000){
    echo "Tu impositivo es de 30% ";
}else if ($impositivo > 60000){
    echo "Tu impositivo es de 45% ";
}
}else{
    echo "No tienes impositivo";
}

?>


