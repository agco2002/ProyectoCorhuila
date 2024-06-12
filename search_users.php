<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <br>
  <div class="container-fluid">
  <a href="administrativos.php" class="btn btn-success mb-3">Volver</a>
  </div>

<?php
require_once 'config/config.php';

$searchTerm = isset($_GET['search_term']) ? mysqli_real_escape_string($conexion, $_GET['search_term']) : '';

// Prepare the SQL query with search term
$sql = "SELECT id, nombre, correo, usuario, fecha_registro FROM registro_usuarios WHERE nombre LIKE '%$searchTerm%'"; // Consultar usuarios por nombre
$result = mysqli_query($conexion, $sql);

if ($result) {
  if (mysqli_num_rows($result) > 0) {
    echo "<section class='content bg-light'>"; // Added background color
    echo "<div class='container-fluid'>";
    echo "<div class='row'>";
    echo "<div class='col-12'>";
    echo "<br><br>";
    echo "<div class='card border border-success'>"; // Green border

    echo "<div class='card-header bg-success text-white'>"; // Green background with white text
    echo "<h3 class='text-center'>Usuarios Registrados:</h3>";
    echo "</div>";

    echo "<div class='card-body'>";
    echo "<table id='example1' class='table table-bordered table-striped table-hover'>"; // Added table-hover for hover effect

    echo "<thead>";
    echo "<tr>";
    echo "<th class='text-success'>Id:</th>"; // Green text for headers
    echo "<th>Nombres:</th>";
    echo "<th>Correo:</th>";
    echo "<th>Usuario:</th>";
    echo "<th>Fecha Registro:</th>";
    echo "<th>Acciones</th>"; // Add a column for actions (optional)
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['nombre'] . "</td>";
      echo "<td>" . $row['correo'] . "</td>";
      echo "<td>" . $row['usuario'] . "</td>";
      echo "<td>" . $row['fecha_registro'] . "</td>";
      echo "<td>"; // Add action buttons here (optional)
      // You can add edit and delete buttons with links to specific pages
      echo "</td>";
      echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</section>";
  } else {
    echo "<p class='text-center'>No se encontraron usuarios con el término de búsqueda: $searchTerm</p>"; // Centered text
  }
} else {
  echo "<p>Error: " . mysqli_error($conexion) . "</p>";
}

mysqli_close($conexion);
?>

</body>
</html>

