<?php
// Obtener ID del evento
$idEvento = $_GET['id_evento'];

// Conectarse a la base de datos
$db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

// Recuperar datos del evento
$consulta = "SELECT titulo, iniciador, descripcion, fecha, hora, ubicacion FROM eventos WHERE id_evento = ?";
$stmt = $db->prepare($consulta);
$stmt->bind_param('i', $idEvento);
$stmt->execute();
$stmt->bind_result($titulo, $iniciador, $descripcion, $fecha, $hora, $ubicacion);
$stmt->fetch();
$stmt->close();

// Mostrar formulario para editar evento
echo "<h1>Editar evento</h1>";
echo "<form action='actualizar_evento.php' method='post'>";
echo "<input type='hidden' name='id_evento' value='$idEvento'>";
echo "<label for='titulo'>Título:</label>";
echo "<input type='text' id='titulo' name='titulo' value='$titulo' required><br>";
echo "<label for='iniciador'>Iniciador:</label>";
echo "<input type='text' id='iniciador' name='iniciador' value='$iniciador' required><br>";
echo "<label for='descripcion'>Descripción:</label>";
echo "<textarea id='descripcion' name='descripcion' required>$descripcion</textarea><br>";
echo "<label for='fecha'>Fecha:</label>";
echo "<input type='date' id='fecha' name='fecha' value='$fecha' required><br>";
echo "<label for='hora'>Hora:</label>";
echo "<input type='time' id='hora' name='hora' value='$hora' required><br>";
echo "<label for='ubicacion'>Ubicación:</label>";
echo "<input type='text' id='ubicacion' name='ubicacion' value='$ubicacion' required><br>";
echo "<input type='submit' value='Actualizar evento'>";
echo "</form>";

$db->close();
?>
