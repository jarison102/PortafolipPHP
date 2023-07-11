
<?php 
$Boton = $_POST['Dia'];

if($_POST){

 switch ($Boton){
    case "Lunes":
        echo "Estas en el dia Lunes";
        break;
    case "Martes":
        echo "Estas en el dia Mates";
        break;
    case "Miercoles":
        echo "Estas en el dia Miercoles";
        break;
    case "Jueves":
        echo "Estas en el dia Jueves";
        break;
    case "Viernes":
        echo "Estas en el dia Viernes";
        break;
    case "Sabado":
        echo "Estas en el dia Sabado";
        break;
    case "Domingo":
        echo "Estas en el dia Domingo";
        break;
 }

}

?>