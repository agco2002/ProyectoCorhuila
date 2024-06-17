
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 </head>
 <body>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1 class="m-5 text-center">EDITAR INFORMACIÓN DE USUARIOS</h1>
  <form class="container" action="conexion_editar_usuarios.php" method="POST">
  <?php
         include 'config/config.php';

            $sql = "SELECT * FROM registro_usuarios WHERE id=".$_GET['id'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="text" class="form-control" name="correo" value="<?php echo $row['correo']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Usuario:</label>
            <input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']; ?>">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Actualizar Información</button>
            <a href="administrativos.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

  </section>
  <!-- /.content -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
 </html>