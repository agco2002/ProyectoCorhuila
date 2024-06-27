<?php

// Conectarse a la base de datos
$db = new mysqli('localhost', 'root', '', 'desarrollo_eventos');

// Recuperar la lista de eventos
$consultaEventos = "SELECT id_evento, titulo, iniciador, fecha, hora, ubicacion FROM eventos ORDER BY fecha, hora";
$stmtEventos = $db->prepare($consultaEventos);
$stmtEventos->execute();
$stmtEventos->bind_result($idEvento, $tituloEvento, $iniciadorEvento, $fechaEvento, $horaEvento, $ubicacionEvento);

// Mostrar la lista de eventos
echo "<h1>Eventos</h1>";
echo "<ul>";
while ($stmtEventos->fetch()) {
    echo "<li>";
    echo "<a href='ver_evento.php?id_evento=$idEvento'>$tituloEvento</a>";
    echo " - $iniciadorEvento - $fechaEvento a las $horaEvento - $ubicacionEvento";
    echo "</li>";
}
echo "</ul>";

$stmtEventos->close();
$db->close();

?>
