<?php
include_once 'cabecera.php';
include_once 'conexion.php';
?>
<?php

if ($_POST) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];;

    $fecha = new DateTime();
    $imagen = $fecha->getTimestamp()."_".$_FILES['archivo'] ['name'];
    $imagen_temporal = $_FILES['archivo'] ['tmp_name'];
    move_uploaded_file($imagen_temporal, "imagenes/".$imagen);

    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);
}


if($_GET){
    $id = $_GET['borrar'];
    $objConexion = new conexion();

    $imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=" .$id);
    
    unlink("imagenes/".$imagen[0] ['imagen']);    // BORRADO DE IMAGENES CON UNLINK AGREGANDO LA RUTA DEL ARCHIVO Y EL NOMBRE COMPLETO
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
                        Descripcion: 
                        <textarea class="form-control" name="descripcion" cols="30" rows="3"></textarea>
                        <br />
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