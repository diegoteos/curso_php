<?php
include_once 'cabecera.php';
include_once 'conexion.php';
?>
<?php

if ($_POST) {
   // print_r($_POST);
    $nombre = $_POST['nombre'];
    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', 'imagen.jpg', 'esta es la primera imagen');";
    $objConexion->ejecutar($sql);
}


if($_GET){
    $id = $_GET['borrar'];
    $objConexion = new conexion();
    $sql = "DELETE FROM proyectos WHERE `proyectos`.`id` = '$id'";
    $objConexion->ejecutar($sql);
    

}
$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");


?>


<br />

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
                        <br>
                        Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
                        <br>
                        <input class="btn btn-success" type="submit" value="Enviar proyecto">
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($proyectos as $proyecto) { ?>
                    <tr>
                    <td><?php echo $proyecto['id']; ?></td>
                    <td><?php echo $proyecto['nombre']; ?></td>
                    <td><?php echo $proyecto['imagen']; ?></td>
                    <td><?php echo $proyecto['descripcion']; ?></td>
                    <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
                    </tr>
                <?php } ?> 
                </tbody>
            </table>

        </div>

    </div>
</div>







<?php
include_once 'pie.php';
?>