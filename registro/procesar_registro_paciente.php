<?php
include("includes/db.php");

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "El correo electrónico ya está registrado.";
} else {
    $sql = "INSERT INTO usuarios (nombre, apellidos, fecha_nacimiento, email, password, tipo_usuario)
            VALUES ('$nombre', '$apellidos', '$fecha_nacimiento', '$email', '$password', 'paciente')";

    if ($conn->query($sql) === TRUE) {
        header("Location: inicio_sesion.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
