<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>

<?php 

$objconexion =  new conexion();
$resultado =$objconexion->consultar("SELECT * FROM `proyectos`");
?>

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bienvenido al Portafolio</h1>
        <p class="col-md-8 fs-4">Informacion</p>
        <button class="btn btn-primary btn-lg" type="button">Mas Informacion</button>
    </div>
</div>


<div class="row row-cols-1 row-cols-md-2 g-4">
<?php foreach($resultado as $proyecto){ ?>
    <div class="col">
    <div class="card">
      <img src="imagenes/<?php echo $proyecto['Imagen']?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['Nombre']?></h5>
        <p class="card-text"><?php echo $proyecto['Descripcion']?></p>
      </div>
    </div>
  </div>
<?php } ?>
</div>




<?php include("pie.php"); ?>