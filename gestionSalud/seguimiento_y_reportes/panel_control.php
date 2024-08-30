<?php
$pageTitle = "Panel de Control";
include("includes/header.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Panel de Control</h1>
    <!-- Mostrar métricas de salud del paciente -->
</div>

<?php
include("includes/footer.php");
?>
