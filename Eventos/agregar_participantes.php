<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar participantes</title>
</head>
<body>
  <h1>Agregar participantes</h1>

  <?php

  // Obtener ID del evento
  $idEvento = $_GET['id_evento'];

  // Conectarse a la base de datos
  $db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

  // Consultar datos del evento
  $consultaEvento = "SELECT titulo, fecha, hora, ubicacion FROM eventos WHERE id_evento = ?";
  $stmtEvento = $db->prepare($consultaEvento);
  $stmtEvento->bind_param('i', $idEvento);
  $stmtEvento->execute();
  $stmtEvento->bind_result($tituloEvento, $fechaEvento, $horaEvento, $ubicacionEvento);
  $stmtEvento->fetch();
  $stmtEvento->close();

  // Mostrar datos del evento
  echo "<h2>Evento: $tituloEvento</h2>";
  echo "<p>Fecha: $fechaEvento - Hora: $horaEvento</p>";
  echo "<p>Ubicación: $ubicacionEvento</p>";

  ?>

  <form action="guardar_participantes.php" method="post">
    <input type="hidden" name="id_evento" value="<?php echo $idEvento; ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required><br>

    <input type="submit" value="Agregar participante">
  </form>

  <?php

  // Mostrar lista de participantes existentes (opcional)
  $consultaParticipantes = "SELECT nombre, correo FROM participantes WHERE id_evento = ?";
  $stmtParticipantes = $db->prepare($consultaParticipantes);
  $stmtParticipantes->bind_param('i', $idEvento);
  $stmtParticipantes->execute();
  $stmtParticipantes->bind_result($nombreParticipante, $correoParticipante);

  echo "<h3>Participantes actuales:</h3>";
  while ($stmtParticipantes->fetch()) {
    echo "<li>$nombreParticipante ($correoParticipante)</li>";
  }

  $stmtParticipantes->close();

  $db->close();

  ?>
</body>
</html>
