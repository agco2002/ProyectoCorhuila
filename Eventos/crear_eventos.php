<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear evento</title>
</head>
<body>
  <h1>Crear evento</h1>
  <form action="guardar_evento.php" method="post">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" required><br>

    <label for="titulo">Iniciador:</label>
    <input type="text" id="iniciador" name="iniciador" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea><br>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required><br>

    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" required><br>

    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion" required><br>

    <input type="submit" value="Crear evento">
  </form>
</body>
</html>
