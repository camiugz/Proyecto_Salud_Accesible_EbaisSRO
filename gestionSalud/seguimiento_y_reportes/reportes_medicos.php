<?php
$pageTitle = "Reportes Médicos";
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

if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: /inicio_sesion.php");
    exit();
}

if (!isset($_SESSION['usuario_id'])) {
    die("ID de usuario no está definido.");
}

$paciente_id = $_SESSION['usuario_id'];

$query = "SELECT peso, altura, imc, presion_arterial_sistolica, presion_arterial_diastolica FROM metricas_salud WHERE paciente_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $paciente_id);
$stmt->execute();
$result = $stmt->get_result();
$metricas = $result->fetch_assoc();
>>>>>>> Stashed changes
?>

<div class="container mt-5">
    <h1>Reportes Médicos</h1>
<<<<<<< Updated upstream
    <!-- Generar y mostrar reportes médicos -->
</div>

<?php
include("includes/footer.php");
=======
    <?php
    $query = "SELECT fecha, descripcion, archivo FROM reportes_medicos WHERE paciente_id = ? ORDER BY fecha DESC";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $paciente_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0): ?>
        <div class="list-group">
            <?php while ($reporte = $result->fetch_assoc()): ?>
                <div class="list-group-item">
                    <h5 class="mb-1"><?php echo date("d-m-Y", strtotime($reporte['fecha'])); ?></h5>
                    <p class="mb-1"><?php echo htmlspecialchars($reporte['descripcion']); ?></p>
                    <a href="/reportes/<?php echo $reporte['archivo']; ?>" class="btn btn-primary" target="_blank">Ver Reporte</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>No se encontraron reportes médicos.</p>
    <?php endif; ?>
</div>

<?php
include("../includes/footer.php");
>>>>>>> Stashed changes
?>
