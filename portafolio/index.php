<?php
include_once 'cabecera.php';
include_once 'conexion.php';
?>
<?php
$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");
?>
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Bienvenidos</h1>
        <p class="lead">Este es mi portafolio privado</p>
        <hr class="my-2">
        <p>Más información</p>

    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($proyectos as $proyecto) { ?>
        <div class="col">
            <div class="card">
                <img width="20" height="350" src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
                    <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
                </div>
            </div>
        </div>

    <?php } ?>
</div>
<br><br>

<?php
include_once 'pie.php';
?>