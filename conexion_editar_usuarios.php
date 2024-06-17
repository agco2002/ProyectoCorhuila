<?php
    include 'config/config.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $fecha_llegada = $_POST['fecha_llegada'];
    $fecha_salida = $_POST['fecha_salida'];

    $sql = "UPDATE registro_usuarios SET nombre='$nombre', correo='$correo', usuario='$usuario', fecha_llegada='$fecha_llegada', fecha_salida='$fecha_salida' WHERE id='$id'";

    if ($resultado = $conexion->query($sql)) {
        header("location:administrativos.php");
    }
?>