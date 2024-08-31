<?php
include 'db.php';

$success = false;
$error_message = '';

if (isset($_FILES['pdf'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $pdf = $_FILES['pdf'];

    if ($pdf['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../uploads/';
        $uploadFile = $uploadDir . basename($pdf['name']);

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        if (move_uploaded_file($pdf['tmp_name'], $uploadFile)) {
            $stmt = $conn->prepare("INSERT INTO documentos (nombre, descripcion, ruta_pdf) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $descripcion, basename($pdf['name']));
            $success = $stmt->execute();
            $stmt->close();
        } else {
            $error_message = "Error al mover el archivo.";
        }
    } else {
        $error_message = "Error al subir el archivo.";
    }
} else {
    $error_message = "No se ha enviado ningún archivo.";
}

$conn->close();

if ($success) {
    header("Location: ../material.php");
} else {
    header("Location: ../subir_pdf.php?message=" . urlencode($error_message));
}
exit();
?>


