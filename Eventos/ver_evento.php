<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ver evento</title>
</head>
<body>
  <?php

  // Obtener ID del evento
  $idEvento = $_GET['id_evento'];

  // Conectarse a la base de datos
  $db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

  // Consultar datos del evento
  $consulta = "SELECT titulo, descripcion, fecha, hora, ubicacion FROM eventos WHERE id_evento = ?";
  $stmt = $db->prepare($consulta);
  $stmt->bind_param('i', $idEvento);
  $stmt->execute();
  $stmt->bind_result($tituloEvento, $descripcionEvento, $fechaEvento, $horaEvento, $ubicacionEvento);
  $stmt->fetch();
  $stmt->close();

  // Mostrar datos del evento
  echo "<h1>$tituloEvento</h1>";
  echo "<p>$descripcionEvento</p>";
  echo "<p>Fecha: $fechaEvento - Hora: $horaEvento</p>";
  echo "<p>Ubicación: $ubicacionEvento</p>";

  // Mostrar botón para agregar participantes
  echo "<a href='agregar_participantes.php?id_evento=$idEvento'>Agregar participantes</a>";

  $db->close();

  ?>
</body>
</html>
