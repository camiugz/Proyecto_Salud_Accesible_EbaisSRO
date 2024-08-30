<?php
$pageTitle = "Recordatorios";
include("includes/header.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}

include("includes/db.php");

$usuario = $_SESSION['usuario'];
$sql = "SELECT * FROM recordatorios WHERE usuario='$usuario'";
$result = $conn->query($sql);

// Obtén los datos del recordatorio si se va a editar
$editRecordatorio = null;
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $sql_edit = "SELECT * FROM recordatorios WHERE id='$edit_id' AND usuario='$usuario'";
    $editResult = $conn->query($sql_edit);
    $editRecordatorio = $editResult->fetch_assoc();
}
?>

<div class="container mt-5">
    <h1>Recordatorios</h1>
    
    <!-- Formulario de Creación/Actualización -->
    <form action="gestionSalud/procesar_recordatorios.php" method="post">
        <input type="hidden" name="id" value="<?php echo $editRecordatorio['id'] ?? ''; ?>">
        <input type="text" name="titulo" value="<?php echo htmlspecialchars($editRecordatorio['titulo'] ?? ''); ?>" placeholder="Título del Recordatorio" required>
        <textarea name="descripcion" placeholder="Descripción" required><?php echo htmlspecialchars($editRecordatorio['descripcion'] ?? ''); ?></textarea>
        <input type="datetime-local" name="fecha_hora" value="<?php echo htmlspecialchars($editRecordatorio['fecha_hora'] ?? ''); ?>" required>
        <button type="submit" class="btn btn-primary">Guardar Recordatorio</button>
    </form>
    
    <h2>Mis Recordatorios</h2>
    <?php if ($result->num_rows > 0): ?>
        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
                <li>
                    <strong><?php echo htmlspecialchars($row['titulo']); ?></strong> - <?php echo htmlspecialchars($row['descripcion']); ?> 
                    (<?php echo htmlspecialchars($row['fecha_hora']); ?>)
                    <a href="?edit_id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="gestionSalud/eliminar_recordatorio.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No tienes recordatorios.</p>
    <?php endif; ?>
</div>

<?php
include("includes/footer.php");
?>
