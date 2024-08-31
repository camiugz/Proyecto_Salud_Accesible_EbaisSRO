<?php
$pageTitle = "Panel de Control";
<<<<<<< Updated upstream
include("includes/header.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}
=======

include("../../includes/header.php");
include("../../includes/db.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    echo "<p>Usuario no autenticado. Redirigiendo...</p>";
    header("Location: /inicio_sesion.php");
    exit();
}

// Obtener ID del paciente
$paciente_id = $_SESSION['usuario_id'];

// Consultar las métricas de salud del paciente
$query = "SELECT peso, altura, imc, presion_arterial_sistolica, presion_arterial_diastolica FROM metricas_salud WHERE paciente_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $paciente_id);
$stmt->execute();
$result = $stmt->get_result();
$metricas = $result->fetch_assoc();
>>>>>>> Stashed changes
?>

<div class="container mt-5">
    <h1>Panel de Control</h1>
    <!-- Mostrar métricas de salud del paciente -->
<<<<<<< Updated upstream
</div>

<?php
include("includes/footer.php");
=======
    <h2>Métricas de Salud</h2>

    <?php if ($metricas): ?>
        <table class="table table-bordered">
            <tr>
                <th>Peso (kg)</th>
                <td><?php echo htmlspecialchars($metricas['peso']); ?></td>
            </tr>
            <tr>
                <th>Altura (cm)</th>
                <td><?php echo htmlspecialchars($metricas['altura']); ?></td>
            </tr>
            <tr>
                <th>IMC</th>
                <td><?php echo htmlspecialchars($metricas['imc']); ?></td>
            </tr>
            <tr>
                <th>Presión Arterial (sistólica / diastólica)</th>
                <td><?php echo htmlspecialchars($metricas['presion_arterial_sistolica']); ?> / <?php echo htmlspecialchars($metricas['presion_arterial_diastolica']); ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>No se encontraron métricas de salud registradas.</p>
    <?php endif; ?>
</div>

<?php
include("../../includes/footer.php");
>>>>>>> Stashed changes
?>
