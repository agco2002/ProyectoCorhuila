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
  $consulta = "SELECT titulo, iniciador, descripcion, fecha, hora, ubicacion FROM eventos WHERE id_evento = ?";
  $stmt = $db->prepare($consulta);
  $stmt->bind_param('i', $idEvento);
  $stmt->execute();
  $stmt->bind_result($tituloEvento, $iniciadorEvento, $descripcionEvento, $fechaEvento, $horaEvento, $ubicacionEvento);
  $stmt->fetch();
  $stmt->close();

  // Mostrar datos del evento
  echo "<h1>$tituloEvento</h1>";
  echo "<h1>$iniciadorEvento</h1>";
  echo "<p>$descripcionEvento</p>";
  echo "<p>Fecha: $fechaEvento - Hora: $horaEvento</p>";
  echo "<p>Ubicación: $ubicacionEvento</p>";

  // Mostrar botón para agregar participantes
  echo "<a href='agregar_participantes.php?id_evento=$idEvento'>Agregar participantes</a>";
  // Mostrar lista de participantes existentes (opcional)
  $consultaParticipantes = "SELECT nombre, identificación, correo FROM participantes WHERE id_evento = ?";
  $stmtParticipantes = $db->prepare($consultaParticipantes);
  $stmtParticipantes->bind_param('i', $idEvento);
  $stmtParticipantes->execute();
  $stmtParticipantes->bind_result( $nombre, $identificación, $correoParticipante);

  echo "<h3>Participantes actuales:</h3>";
  while ($stmtParticipantes->fetch()) {
    echo "<li>$nombre, $identificación, $correoParticipante</li>";
  }

  $stmtParticipantes->close();

  

  $db->close();

  ?>
  <a href="eliminar_evento.php?id_evento=<?php echo $idEvento; ?>">Eliminar evento</a>

  <a href="editar_evento.php?id_evento=<?php echo $idEvento; ?>">Editar evento</a>

  echo "<a href='editar_participante.php?id_evento=$idEvento&id_participante=$participanteId'>Editar participante</a>";


<?php

  

  ?>

</body>
</html>
