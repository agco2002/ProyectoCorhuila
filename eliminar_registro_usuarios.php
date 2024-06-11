<?php
      include 'Conexion.php';

    $Id = $_REQUEST['id'];
    $sql = "DELETE FROM registro_usuarios WHERE id ='$Id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:administrativos.php");
    }

?>