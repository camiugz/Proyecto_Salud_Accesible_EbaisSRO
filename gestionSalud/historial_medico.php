<?php
$pageTitle = "Historial Médico";
<<<<<<< Updated upstream
include("includes/header.php");
=======
include("../includes/header.php");
>>>>>>> Stashed changes

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}

include("includes/db.php");

$usuario = $_SESSION['usuario'];
$sql = "SELECT * FROM datos_salud WHERE usuario='$usuario'";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h1>Historial Médico</h1>
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <h2>Datos del <?php echo htmlspecialchars($row['fecha_registro']); ?></h2>
            <p><strong>Niveles de Glucosa:</strong> <?php echo htmlspecialchars($row['glucosa']); ?></p>
            <p><strong>Presión Sistólica:</strong> <?php echo htmlspecialchars($row['presion_sistolica']); ?></p>
            <p><strong>Presión Diastólica:</strong> <?php echo htmlspecialchars($row['presion_diastolica']); ?></p>
            <p><strong>Colesterol:</strong> <?php echo htmlspecialchars($row['colesterol']); ?></p>
            <p><strong>Colesterol LDL:</strong> <?php echo htmlspecialchars($row['colesterol_ldl']); ?></p>
            <p><strong>Colesterol HDL:</strong> <?php echo htmlspecialchars($row['colesterol_hdl']); ?></p>
            <p><strong>Frecuencia Cardíaca:</strong> <?php echo htmlspecialchars($row['frecuencia_cardiaca']); ?></p>
            <p><strong>Nivel de Oxígeno en Sangre:</strong> <?php echo htmlspecialchars($row['oxigeno_sangre']); ?></p>
            <p><strong>Índice de Masa Corporal (IMC):</strong> <?php echo htmlspecialchars($row['imc']); ?></p>
            <p><strong>Triglicéridos:</strong> <?php echo htmlspecialchars($row['trigliceridos']); ?></p>
            <p><strong>Síntomas:</strong> <?php echo htmlspecialchars($row['sintomas']); ?></p>
            <p><strong>Alergias:</strong> <?php echo htmlspecialchars($row['alergias']); ?></p>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No hay historial médico disponible.</p>
    <?php endif; ?>
</div>

<?php
<<<<<<< Updated upstream
include("includes/footer.php");
=======
include("../includes/footer.php");
>>>>>>> Stashed changes
?>
