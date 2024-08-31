<?php
<<<<<<< Updated upstream
include("includes/db.php");
=======
include("../includes/db.php");
>>>>>>> Stashed changes

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
