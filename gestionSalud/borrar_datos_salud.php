<?php
include("includes/db.php");

$usuario = $_SESSION['usuario'];

// Eliminar los datos de salud
$sql = "DELETE FROM datos_salud WHERE usuario='$usuario'";

if ($conn->query($sql) === TRUE) {
    header("Location: gestionSalud/gestion_salud.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
