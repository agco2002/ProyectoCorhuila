<?php

// Obtener datos del formulario
if (isset($_POST['id_evento']) && isset($_POST['id_participante']) && isset($_POST['nombre']) && isset($_POST['identificación']) && isset($_POST['correo'])) {
    $idEvento = $_POST['id_evento'];
    $idParticipante = $_POST['id_participante'];
    $nombre = $_POST['nombre'];
    $identificación = $_POST['identificación'];
    $correo = $_POST['correo'];

    // Conectarse a la base de datos
    $db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

    // Actualizar participante en la base de datos
    $consulta = "UPDATE participantes SET nombre = ?, identificación = ?, correo = ? WHERE id_participante = ?";
    $stmt = $db->prepare($consulta);
    $stmt->bind_param('sssssi', $nombre, $identificación, $correo, $idParticipante);
    $stmt->execute();

    if ($stmt->affected_rows === 1) {
        echo "Participante actualizado correctamente.";
        // Redireccionar al usuario (ej: ver_evento.php)
        header('Location: ver_evento.php?id_evento=' . $idEvento);
    } else {
        echo "Error al actualizar el participante: " . $db->error;
    }

    $stmt->close();
} else {
    echo "Faltan datos para actualizar el participante.";
}

$db->close();

?>
