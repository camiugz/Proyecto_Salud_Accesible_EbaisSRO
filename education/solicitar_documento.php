<?php
include 'php/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['name'];
    $cedula = $_POST['id'];
    $documento = $_POST['document'];

    $stmt = $conn->prepare("INSERT INTO solicitudes (nombre, cedula, documento) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $cedula, $documento);

    $success = $stmt->execute();

    $stmt->close();
    $conn->close();

    if ($success) {
        header('Location: material.php?status=success');
    } else {
        header('Location: solicitar_documento.php?status=error');
    }
    exit();
}
?>

