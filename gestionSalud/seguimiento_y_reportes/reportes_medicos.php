<?php
$pageTitle = "Reportes Médicos";
include("includes/header.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Reportes Médicos</h1>
    <!-- Generar y mostrar reportes médicos -->
</div>

<?php
include("includes/footer.php");
?>
