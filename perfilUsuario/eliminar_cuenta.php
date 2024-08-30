<?php
include("includes/db.php");

$email = $_SESSION['usuario'];

$sql = "DELETE FROM usuarios WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    session_destroy();
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
