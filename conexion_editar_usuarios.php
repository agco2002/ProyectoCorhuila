<?php
    include 'conexion.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];

    $sql = "UPDATE registro_usuarios SET nombre='$nombre', correo='$correo', usuario='$usuario' WHERE id='$id'";

    if ($resultado = $conn->query($sql)) {
        header("location:administrativos.php");
    }
?>