<?php
include('config/config.php');

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$fecha_llegada = $_POST["fecha_llegada"];
$fecha_salida = $_POST["fecha_salida"];



// Verificar si el usuario ya existe en la base de datos
$sql = "SELECT id FROM registro_usuarios WHERE correo = '$correo'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
echo "El correo ya se encuentra registrado. Por favor, elige otro correo electrónico.";
} else {

// Insertar datos en la base de datos
$sql = "INSERT INTO registro_usuarios (nombre, correo, usuario, contraseña, fecha_llegada, fecha_salida ) VALUES ('$nombre', '$correo', '$usuario', '$contraseña', '$fecha_llegad ', '$fecha_salida ')";

if ($conexion->query($sql) === TRUE) {
// Redireccionar a la página de inicio de sesión
     header("Location: administrativos.php");
     exit();

} else {
	echo "Error al registrar el correo electrónico". $conexion->error;
}
}
}

$conexion->close();
?>