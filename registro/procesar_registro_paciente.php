<?php
<<<<<<< Updated upstream
include("includes/db.php");
=======
include("../includes/db.php");
>>>>>>> Stashed changes

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
<<<<<<< Updated upstream
    echo "El correo electrónico ya está registrado.";
=======
    echo "error=El correo electrónico ya está registrado.";
>>>>>>> Stashed changes
} else {
    $sql = "INSERT INTO usuarios (nombre, apellidos, fecha_nacimiento, email, password, tipo_usuario)
            VALUES ('$nombre', '$apellidos', '$fecha_nacimiento', '$email', '$password', 'paciente')";

    if ($conn->query($sql) === TRUE) {
<<<<<<< Updated upstream
        header("Location: inicio_sesion.php");
    } else {
        echo "Error: " . $conn->error;
=======
        echo "success=Registro exitoso";
    } else {
        echo "error=Hubo un error al registrarte.";
>>>>>>> Stashed changes
    }
}

$conn->close();
?>
<<<<<<< Updated upstream
=======




>>>>>>> Stashed changes
