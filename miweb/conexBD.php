<?php
$host = "10.7.34.21";
$user = "m14";
$password = "m14";
$database = "proyecto";

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
  echo"Connection failed: ";
} else {
  echo "Bienvenido. Se ha conectado correctamente a la base de datos.";
}
?>
