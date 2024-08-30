<?php
include("includes/db.php");

$id = $_GET['id'];

// Eliminar recordatorio
$sql = "DELETE FROM recordatorios WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: gestionSalud/recordatorios.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
