<?php
<<<<<<< Updated upstream
include("includes/db.php");
=======
include("../includes/db.php");
>>>>>>> Stashed changes

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$numero_contacto = $_POST['numero_contacto'];
$cedula = $_POST['cedula'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$tipo_sangre = $_POST['tipo_sangre'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$email = $_SESSION['usuario'];

$sql = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', numero_contacto='$numero_contacto', cedula='$cedula',
        fecha_nacimiento='$fecha_nacimiento', genero='$genero', tipo_sangre='$tipo_sangre', peso='$peso', altura='$altura'
        WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    header("Location: perfilUsuario/perfil_paciente.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
