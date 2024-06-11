<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "corhuila";

// Crear la conexión
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
  die("Error de conexión: " . mysqli_connect_error());
}

?>