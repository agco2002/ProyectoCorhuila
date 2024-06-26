<?php
require_once 'conexion_index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
    <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-success ">
        <div class="card-header text-center">
        <a href="index.php" class="h1 text-success"><b>CORHUILA</b></a>
        </div>
        <div class="card-body">
        <p class="login-box-msg">Inicia sesión</p>

        <form action="conexion_index.php" method="POST">
            <div class="input-group mb-3">
            <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row d-flex justify-content-center ">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class=" btn btn-success btn-block">Ingresar</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
    <br>
        

        <!--<p class="mb-1 text-center">
            <a href="OlvidoContraseña.html">Olvidé mi contraseña ?</a>
        </p>-->
        
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
