<?php
    include 'config/config.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];

    $sql = "UPDATE registro_usuarios SET nombre='$nombre', correo='$correo', usuario='$usuario' WHERE id='$id'";

    if ($resultado = $conexion->query($sql)) {
        header("location:administrativos.php");
    }
?>