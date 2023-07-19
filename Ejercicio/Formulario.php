<?php include("ConexionBd.php"); ?>

<?php
if ($_POST) {
    print_r($_POST);
    $nombre = $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $pais=$_POST['pais'];
    $departamento=$_POST['departamento'];
    $objconexion =  new conexion();

    $sql="INSERT INTO `datospersona`(`id`, `Nombre`, `Apellido`, `Pais`, `Departamento`) VALUES (Null,'$nombre','$apellido','$pais','$departamento');";

    $objconexion->ejecutar($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- js-->
    <script src="./animacion.js"></script>
    <title>Document</title>
</head>
<body>
<form action="Formulario.php" method="POST" id="formulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" oninput="actualizarDepartamentos()" required>

        <label for="departamento">Departamento:</label>
        <select id="departamento" name="departamento">
            <!-- Aquí se llenarán los departamentos automáticamente -->
        </select>
        
        <input type="button" value="Ver" onclick="mostrarDatos()">
        <input type="submit" value="Enviar">
    </form>
        
    <div class="table-responsive" id="tablaDatos" style="display: none;">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Departamento</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row" id="mostrarNombre"></td>
                    <td id="mostrarApellido"></td>
                    <td id="mostrarPais"></td>
                    <td id="mostrarDepartamento"></td>
                </tr>
            </tbody>
        </table>
    </div>

    
    
</body>
</html>