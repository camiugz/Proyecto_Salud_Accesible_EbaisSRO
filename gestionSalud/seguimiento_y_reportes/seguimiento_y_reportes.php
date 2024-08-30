<?php
$pageTitle = "Seguimiento y Reportes";
include("includes/header.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Seguimiento y Reportes</h1>

    <h2>Panel de Control</h2>
    <a href="gestionSalud/seguimiento_y_reportes/panel_control.php" class="btn btn-info">Ver Panel de Control</a>

    <h2>Reportes Médicos</h2>
    <a href="gestionSalud/seguimiento_y_reportes/reportes_medicos.php" class="btn btn-info">Ver Reportes Médicos</a>
    
</div>

<?php
include("includes/footer.php");
?>
