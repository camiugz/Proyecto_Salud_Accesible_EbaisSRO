<?php
<<<<<<< Updated upstream
include("includes/db.php");
=======
include("../includes/db.php");
>>>>>>> Stashed changes

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$codigo = $_POST['codigo'];
$especialidad = $_POST['especialidad'];
$telefono = $_POST['telefono'];
$disponibilidad = $_POST['disponibilidad'];

$email = $_SESSION['usuario'];

$sql = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', codigo='$codigo', especialidad='$especialidad',
        telefono='$telefono', disponibilidad='$disponibilidad'
        WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    header("Location: perfilUsuario/perfil_medico.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
