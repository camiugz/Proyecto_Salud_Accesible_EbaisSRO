<?php
include("includes/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['usuario'] = $row['email'];
        $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
        header("Location: index.php");
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Correo electrónico no registrado.";
}

$conn->close();
?>
