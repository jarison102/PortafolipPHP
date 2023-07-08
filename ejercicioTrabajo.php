<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nombre = $_POST['Nombre'];
    

    echo "Que departamentos haz visitado?:
    <input type='text' name='Nombre' id='Nombre' value='$Nombre'>
    <br>
    Departamento:
    <select name='Departamento' id='Departamento'>";
    if($Nombre === "Stived"){
        echo "<option value='Stived'>Boyacá</option>
        <option value='Stived'>Caldas</option>
        <option value='Stived'>Caquetá</option>
        <option value='Stived'>Casanare</option>
        <option value='Stived'>Cauca</option>";

    }else if ($Nombre === "Fabian"){
        echo "<option value='Fabian'>Amazonas</option>
        <option value='Fabian'>Antioquia</option>
        <option value='Fabian'>Arauca</option>
        <option value='Fabian'>Atlántico</option>
        <option value='Fabian'>Bolívar</option>}";

    }else{
        echo "
        <option value='Fabian'>Amazonas</option>
        <option value='Fabian'>Antioquia</option>
        <option value='Fabian'>Arauca</option>
        <option value='Fabian'>Atlántico</option>
        <option value='Fabian'>Bolívar</option>
        <option value='Stived'>Boyacá</option>
        <option value='Stived'>Caldas</option>
        <option value='Stived'>Caquetá</option>
        <option value='Stived'>Casanare</option>
        <option value='Stived'>Cauca</option>";
    }

    echo "Que Paises haz visitado?:
    <br>
    <input type='text' name='Nombre' id='Nombre' value='$Nombre'>
    <br>
    Paises:
    <select name='Paises' id='Paises'>";

    if($Nombre === "Stived"){
        echo "<option value='Stived'>España</option>
        <option value='Stived'>Argentina</option>
        <option value='Stived'>Bolivia</option>
        <option value='Stived'>Brasil</option>
        <option value='Stived'>Chile</option>";

    }else if ($Nombre === "Fabian"){
        echo "<option value='Fabian'>Colombia</option>
        <option value='Fabian'>Costa_Rica</option>
        <option value='Fabian'>Cuba</option>
        <option value='Fabian'>Ecuador</option>
        <option value='Fabian'>Guatemala</option>}";

    }else{
        echo "
            <option value='Stived'>España</option>
            <option value='Stived'>Argentina</option>
            <option value='Stived'>Bolivia</option>
            <option value='Stived'>Brasil</option>
            <option value='Stived'>Chile</option>
            <option value='Fabian'>Colombia</option>
            <option value='Fabian'>CostaRica</option>
            <option value='Fabian'>Cuba</option>
            <option value='Fabian'>Ecuador</option>
            <option value='Fabian'>Guatemala</option>";
    }

    echo "</select>
        <br>
        <input type='submit' value='Enviar'>
        </form>";
}
?>