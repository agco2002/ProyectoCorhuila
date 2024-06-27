<?php
// Obtener ID del participante y del evento
$idParticipante = $_GET['id_participante'];
$idEvento = $_GET['id_evento'];

// Conectarse a la base de datos
$db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

// Eliminar participante
$consulta = "DELETE FROM participantes WHERE id_participante = ?";
$stmt = $db->prepare($consulta);
$stmt->bind_param('i', $idParticipante);
$stmt->execute();

if ($stmt->affected_rows === 1) {
    echo "Participante eliminado correctamente.";
    // Redireccionar al usuario (ej: ver_evento.php)
    header('Location: ver_evento.php?id_evento=' . $idEvento);
} else {
    echo "Error al eliminar el participante: " . $db->error;
}

$stmt->close();
$db->close();
?>
