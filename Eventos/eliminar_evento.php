<?php
// Obtener ID del evento
$idEvento = $_GET['id_evento'];

// Conectarse a la base de datos
$db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

// Iniciar transacción (opcional)
$db->begin_transaction();

// Eliminar participantes del evento
$consultaEliminarParticipantes = "DELETE FROM participantes WHERE id_evento = ?";
$stmtEliminarParticipantes = $db->prepare($consultaEliminarParticipantes);
$stmtEliminarParticipantes->bind_param('i', $idEvento);
$stmtEliminarParticipantes->execute();

// Verificar si se eliminaron participantes
if ($stmtEliminarParticipantes->affected_rows === 0) {
  // No hay participantes para eliminar, mostrar error
  echo "No hay participantes para eliminar del evento.";
  $db->rollback(); // Revertir transacción
  exit;
}

// Eliminar evento
$consultaEliminarEvento = "DELETE FROM eventos WHERE id_evento = ?";
$stmtEliminarEvento = $db->prepare($consultaEliminarEvento);
$stmtEliminarEvento->bind_param('i', $idEvento);
$stmtEliminarEvento->execute();

// Verificar si se eliminó el evento
if ($stmtEliminarEvento->affected_rows === 1) {
  // Evento eliminado correctamente, confirmar y redireccionar
  echo "Evento eliminado correctamente.";
  header('Location: mostrar_eventos.php');
  $db->commit(); // Confirmar transacción
} else {
  // Error al eliminar el evento, mostrar error
  echo "Error al eliminar el evento: " . $db->error;
  $db->rollback(); // Revertir transacción
}

// Cerrar consultas y conexión
$stmtEliminarParticipantes->close();
$stmtEliminarEvento->close();
$db->close();
?>
