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
  $consultaEvento = "SELECT titulo, iniciador, fecha, hora, ubicacion FROM eventos WHERE id_evento = ?";
  $stmtEvento = $db->prepare($consultaEvento);
  $stmtEvento->bind_param('i', $idEvento);
  $stmtEvento->execute();
  $stmtEvento->bind_result( $tituloEvento, $iniciador, $fechaEvento, $horaEvento, $ubicacionEvento);
  $stmtEvento->fetch();
  $stmtEvento->close();

  // Mostrar datos del evento
  echo "<h2>Evento: $tituloEvento</h2>";
  echo "<h3>Iniciador: $iniciador</h3>";
  echo "<p>Fecha: $fechaEvento - Hora: $horaEvento</p>";
  echo "<p>Ubicación: $ubicacionEvento</p>";

  ?>

  <form action="guardar_participantes.php" method="post">
    <input type="hidden" name="id_evento" value="<?php echo $idEvento; ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="identificación">Identificación:</label>
    <input type="text" id="identificación" name="identificación" required><br>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required><br>

    <input type="submit" value="Agregar participante">
  </form>

  
</body>
</html>
