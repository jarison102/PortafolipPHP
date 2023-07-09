<?php 

if($_POST){
    $edad = $_POST ['Edad'];
    
    echo "Tienes años :
    <input type='text' name='Edad' id='Edad' value='$edad'>
    <br>
    Precios:
    <select name='Precios' id='Precios'>";
    
    if($edad < 4){
        echo "<option value='4'>Gratis</option>";
    }else if ($edad == 4){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 5){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 6){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 7){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 8){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 9){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 10){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 11){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 12){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 13){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 14){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 15){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 16){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 17){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad == 18){
        echo 
            "<option value='4e'>5€</option>";
    }else if ($edad > 18){
        echo
        "<option value='18M'>10€</option>";
    }
}



?>