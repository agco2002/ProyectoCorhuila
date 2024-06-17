<?php
      include 'config/config.php';

    $Id = $_REQUEST['id'];
    $sql = "DELETE FROM registro_usuarios WHERE id ='$Id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location:administrativos.php");
    }

?>