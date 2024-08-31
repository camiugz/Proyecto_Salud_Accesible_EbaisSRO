<?php
$servername = "localhost";
$username = "root";
<<<<<<< Updated upstream
$password = "root";
$dbname = "ebais_db";
=======
$password = "Midlilb2410./";
$dbname = "salud_accesible_ebais_sro";
>>>>>>> Stashed changes

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexion exitosa";

?>
