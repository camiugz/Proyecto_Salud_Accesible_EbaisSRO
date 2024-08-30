<?php
$pageTitle = "Registro de Datos de Salud";
include("includes/header.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}
?>

include("includes/db.php");

$usuario = $_SESSION['usuario'];
$sql = "SELECT * FROM datos_salud WHERE usuario='$usuario'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<div class="container mt-5">
    <h1>Registro de Datos de Salud</h1>
    <form action="procesar_datos_salud.php" method="post">
        <input type="text" name="glucosa" value="<?php echo htmlspecialchars($data['glucosa'] ?? ''); ?>" placeholder="Niveles de Glucosa" required>
        <input type="text" name="presion_sistolica" value="<?php echo htmlspecialchars($data['presion_sistolica'] ?? ''); ?>" placeholder="Presión Sistólica" required>
        <input type="text" name="presion_diastolica" value="<?php echo htmlspecialchars($data['presion_diastolica'] ?? ''); ?>" placeholder="Presión Diastólica" required>
        <input type="text" name="colesterol" value="<?php echo htmlspecialchars($data['colesterol'] ?? ''); ?>" placeholder="Colesterol">
        <input type="text" name="colesterol_ldl" value="<?php echo htmlspecialchars($data['colesterol_ldl'] ?? ''); ?>" placeholder="Colesterol LDL">
        <input type="text" name="colesterol_hdl" value="<?php echo htmlspecialchars($data['colesterol_hdl'] ?? ''); ?>" placeholder="Colesterol HDL">
        <input type="text" name="frecuencia_cardiaca" value="<?php echo htmlspecialchars($data['frecuencia_cardiaca'] ?? ''); ?>" placeholder="Frecuencia Cardíaca">
        <input type="text" name="oxigeno_sangre" value="<?php echo htmlspecialchars($data['oxigeno_sangre'] ?? ''); ?>" placeholder="Nivel de Oxígeno en Sangre">
        <input type="text" name="imc" value="<?php echo htmlspecialchars($data['imc'] ?? ''); ?>" placeholder="Índice de Masa Corporal (IMC)">
        <input type="text" name="trigliceridos" value="<?php echo htmlspecialchars($data['trigliceridos'] ?? ''); ?>" placeholder="Triglicéridos">
        <textarea name="sintomas" placeholder="Síntomas"><?php echo htmlspecialchars($data['sintomas'] ?? ''); ?></textarea>
        <textarea name="alergias" placeholder="Alergias"><?php echo htmlspecialchars($data['alergias'] ?? ''); ?></textarea>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <form action="gestionSalud/borrar_datos_salud.php" method="post" class="mt-3">
        <button type="submit" class="btn btn-danger">Eliminar Datos de Salud</button>
    </form>
</div>

<?php
include("includes/footer.php");
?>
