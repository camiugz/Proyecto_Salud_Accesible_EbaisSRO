<?php
include 'php/db.php';

// Eliminar una solicitud si se envía un ID
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];

    $stmt = $conn->prepare("DELETE FROM solicitudes WHERE id = ?");
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
        echo "Solicitud eliminada correctamente.";
    } else {
        echo "Error al eliminar la solicitud.";
    }

    $stmt->close();
}

// Obtener todas las solicitudes
$result = $conn->query("SELECT * FROM solicitudes");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver Solicitudes</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <h1>Solicitudes de Documentos</h1>
        <nav>
            <ul>
                <li><a href="material.php">Volver</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Documento</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($row['cedula']); ?></td>
                        <td><?php echo htmlspecialchars($row['documento']); ?></td>
                        <td><?php echo htmlspecialchars($row['fecha']); ?></td>
                        <td>
                            <form method="POST" action="ver_solicitudes.php" style="display:inline;">
                                <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($row['id']); ?>">
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>@2024 Salud Accesible. Todos los derechos reservados</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
