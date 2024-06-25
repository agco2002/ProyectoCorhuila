<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listar eventos</title>
</head>
<body>
  <h1>Lista de eventos</h1>

  <?php

  // Conectarse a la base de datos
  $db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');
  // Consultar eventos
  $consultaEventos = "SELECT id_evento, titulo, fecha, hora, ubicacion FROM eventos ORDER BY fecha, hora";
  $stmtEventos = $db->prepare($consultaEventos);
  $stmtEventos->execute();
  $stmtEventos->bind_result($idEvento, $tituloEvento, $fechaEvento, $horaEvento, $ubicacionEvento);

  // Mostrar eventos
  echo "<ul>";
  while ($stmtEventos->fetch()) {
    echo "<li>";
    echo "<a href='ver_evento.php?id_evento=$idEvento'>$tituloEvento</a>";
    echo " - $fechaEvento | $horaEvento - $ubicacionEvento";
    echo "</li>";
  }
  echo "</ul>";

  $stmtEventos->close();
  $db->close();

  ?>
</body>
</html>
