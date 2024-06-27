<?php
// Obtener datos del formulario
$idEvento = $_POST['id_evento'];
$titulo = $_POST['titulo'];
$iniciador = $_POST['iniciador'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$ubicacion = $_POST['ubicacion'];

// Conectarse a la base de datos
$db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

// Actualizar evento en la base de datos
$consulta = "UPDATE eventos SET  titulo = ?, iniciador = ?, descripcion = ?, fecha = ?, hora = ?, ubicacion = ? WHERE id_evento = ?";
$stmt = $db->prepare($consulta);
$stmt->bind_param('ssssssi',  $titulo, $iniciador, $descripcion, $fecha, $hora, $ubicacion, $idEvento);
$stmt->execute();

if ($stmt->affected_rows === 1) {
    echo "Evento actualizado correctamente.";
    // Redireccionar al usuario (ej: ver_evento.php)
    header('Location: ver_evento.php?id_evento=' . $idEvento);
} else {
    echo "Error al actualizar el evento: " . $db->error;
}

$stmt->close();
$db->close();
?>
