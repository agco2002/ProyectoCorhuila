<?php

// Obtener ID del evento y ID del participante
$idEvento = $_GET['id_evento'];
$idParticipante = $_GET['id_participante'];

// Conectarse a la base de datos
$db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

// Recuperar datos del participante
$consulta = "SELECT nombre, identificación, correo FROM participantes WHERE id_participante = ?";
$stmt = $db->prepare($consulta);
$stmt->bind_param('i', $idParticipante);
$stmt->execute();
$stmt->bind_result($nombre, $identificación, $correo);
$stmt->fetch();
$stmt->close();

// Mostrar formulario para editar participante
echo "<h1>Editar participante</h1>";
echo "<form action='actualizar_participante.php' method='post'>";
echo "<input type='hidden' name='id_evento' value='$idEvento'>";
echo "<input type='hidden' name='id_participante' value='$idParticipante'>";
echo "<label for='nombre'>Nombre:</label>";
echo "<input type='text' id='nombre' name='nombre' value='$nombre' required><br>";
echo "<label for='identificación'>Identificación:</label>";
echo "<input type='text' id='identificación' name='identificación' value='$identificación' required><br>";
echo "<label for='correo'>Correo electrónico:</label>";
echo "<input type='email' id='correo' name='correo' value='$correo' required><br>";
echo "<input type='submit' value='Actualizar participante'>";
echo "</form>";

$db->close();

?>
