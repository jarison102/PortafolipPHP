<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php
if ($_POST) {
    print_r($_POST);
    $Nombre = $_POST['Nombre'];
    $descripcion =$_POST['Descripcion'];
    $imagen=$_FILES['Archivo']['name'];
    $imagen_temporal=$_FILES['Archivo']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);
    $objconexion =  new conexion();

    $sql = "INSERT INTO `proyectos` (`id`, `Nombre`, `Imagen`, `Descripcion`) VALUES (Null,'$Nombre','$imagen','$descripcion');";

    $objconexion->ejecutar($sql);
}
if($_GET){
    $id=$_GET['borrar'];
    $objconexion =  new conexion();
    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` = ".$id;
    $objconexion->ejecutar($sql);
    //"DELETE FROM proyectos WHERE `proyectos`.`id` = 7"

}

$objconexion =  new conexion();
$resultado =$objconexion->consultar("SELECT * FROM `proyectos`");

//print_r($resultado);
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-md-8">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                Datos del Proyecto:
                            </div>
                            <div class="card-body">
                                <form action="portafolio.php" method="post" enctype="multipart/form-data">

                                    Nombre del Proyecto <input class="form-control" type="text" name="Nombre" id="">
                                    <br>
                                    Archivo del proyecto <input class="form-control" type="file" name="Archivo" id="">
                                    <br>
                                    Descripcion:
                                    <textarea class="form-control" name="Descripcion" id="Descripcion" cols="30" rows="10"></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-success">Enviar Proyecto</button>

                                </form>
                            </div>
                            <div class="card-footer text-muted">

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultado as $proyecto){ ?>
                        <tr >
                            <td><?php echo $proyecto['id']?></td>
                            <td><?php echo $proyecto['Nombre']?></td>
                            
                            <td>

                            <img width= "300" src="imagenes/<?php echo $proyecto['Imagen']?>" alt="">
                        
                            </td>


                            <td><?php echo $proyecto['Descripcion']?></td>
                            <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>





<?php include("pie.php"); ?>