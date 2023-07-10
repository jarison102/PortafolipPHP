<?php

$Pizza = $_POST['Pizza'];


if($_POST){
    echo "Que tipo de pizza es?:
    <input type='text' name='Nombre' id='Nombre' value='$Pizza'>
    <br>
    Ingredientes:
    <select name='IngredientesVegetariano' id='IngredientesVegetariano'>";
    
    

if($Pizza === "vegetarianos"){
    echo 
    "<option value='vegetarianos'>Pimiento</option>
    <option value='vegetarianos'>tofu</option>";
}else if ($Pizza === "no_vegetarianos"){
    echo "<option value='no_vegetarianos'>Peperoni</option>
    <option value='no_vegetarianos'>Jamón</option>
    <option value='no_vegetarianos'>Salmón</option>";
}else{
    echo "ninguna pizza";
}echo("</select>");


echo "

    <br>
    Ingredientes Opcionales:
    <select name='IngredientesVegetarianoOpcionales' id='IngredientesVegetarianoOpcionales' <br> 
    <br>";

if ($Pizza === "vegetarianos"){
    echo 
    "<option value='IngredientesVegetarianoOpcionales'>mozzarella</option>
    <option value='IngredientesVegetarianoOpcionales'>Tomate</option>";

}echo ("</select>");

echo "<br> <br>  <br> <form action='hacerentrega.php' method='post'><input type='submit' value='Enviar'>
</form>";
}
?>