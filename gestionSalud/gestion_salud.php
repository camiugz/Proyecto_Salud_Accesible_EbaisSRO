<?php
$pageTitle = "Gestión de la Salud";
include("includes/header.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Gestión de la Salud</h1>

    <h2>Registro de Datos de Salud</h2>
    <a href="gestionSalud/registro_datos_salud.php" class="btn btn-info">Ir a Registro de Datos de Salud</a>

    <h2>Historial Médico</h2>
    <a href="gestionSalud/historial_medico.php" class="btn btn-info">Ver Historial Médico</a>

    <h2>Recordatorios</h2>
    <a href="gestionSalud/recordatorios.php" class="btn btn-warning">Ver Recordatorios</a>

    <h2>Seguimiento y Reportes</h2>
    <a href="gestionSalud/seguimiento_y_reportes/seguimiento_y_reportes.php" class="btn btn-warning">Ir a Seguimiento y Reportes</a>
    
</div>

<?php
include("includes/footer.php");
?>
