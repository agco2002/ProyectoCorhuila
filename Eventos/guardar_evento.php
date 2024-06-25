<?php

// Conectarse a la base de datos
$db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

// Validar datos del formulario
if (isset($_POST['titulo']) && isset($_POST['descripcion']) &&
    isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['ubicacion'])) {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $ubicacion = $_POST['ubicacion'];

  // Guardar evento en la base de datos
  $consulta = "INSERT INTO eventos (titulo, descripcion, fecha, hora, ubicacion) VALUES (?, ?, ?, ?, ?)";
  $stmt = $db->prepare($consulta);
  $stmt->bind_param('sssss', $titulo, $descripcion, $fecha, $hora, $ubicacion);
  $stmt->execute();

  if ($stmt->affected_rows === 1) {
    $idEvento = $stmt->insert_id;
    echo "Evento creado correctamente. <a href='ver_evento.php?id_evento=$idEvento'>Ver evento</a>";
  } else {
    echo "Error al crear el evento: " . $db->error;
  }

  $stmt->close();
} else {
  echo "Faltan datos para crear el evento.";
}

$db->close();

?>
