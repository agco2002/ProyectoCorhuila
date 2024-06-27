<?php
// Obtener ID del evento
$idEvento = $_GET['id_evento'];

// Conectarse a la base de datos
$db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

// Eliminar evento
$consulta = "DELETE FROM eventos WHERE id_evento = ?";
$stmt = $db->prepare($consulta);
$stmt->bind_param('i', $idEvento);
$stmt->execute();

if ($stmt->affected_rows === 1) {
    echo "Evento eliminado correctamente.";
    // Redireccionar al usuario (ej: mostrar_eventos.php)
    header('Location: mostrar_eventos.php');
} else {
    echo "Error al eliminar el evento: " . $db->error;
}

$stmt->close();
$db->close();
?>
