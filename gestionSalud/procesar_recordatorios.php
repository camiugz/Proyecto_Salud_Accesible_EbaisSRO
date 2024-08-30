<?php
include("includes/db.php");

$usuario = $_SESSION['usuario'];
$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha_hora = $_POST['fecha_hora'];

if ($id) {
    // Actualizar recordatorio existente
    $sql = "UPDATE recordatorios 
            SET titulo='$titulo', descripcion='$descripcion', fecha_hora='$fecha_hora'
            WHERE id='$id' AND usuario='$usuario'";
} else {
    // Insertar nuevo recordatorio
    $sql = "INSERT INTO recordatorios (usuario, titulo, descripcion, fecha_hora) 
            VALUES ('$usuario', '$titulo', '$descripcion', '$fecha_hora')";
}

if ($conn->query($sql) === TRUE) {
    header("Location: gestionSalud/recordatorios.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
