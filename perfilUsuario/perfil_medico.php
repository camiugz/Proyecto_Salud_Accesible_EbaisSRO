<?php
$pageTitle = "Perfil de Médico";
<<<<<<< Updated upstream
include("includes/header.php");
=======
include("../includes/header.php");
>>>>>>> Stashed changes

// Verificar si el usuario está logueado como médico
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'medico') {
    header("Location: inicio_sesion.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Perfil de Médico</h1>
    <form action="perfil/Usuarioprocesar_perfil_medico.php" method="post">
        <!-- Los campos del formulario deben estar pre-rellenados con los datos actuales del usuario -->
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellidos" placeholder="Apellidos" required>
        <input type="text" name="codigo" placeholder="Código Médico" required>
        <input type="text" name="especialidad" placeholder="Especialidad" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="text" name="disponibilidad" placeholder="Disponibilidad" required>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    <form action="perfilUsuario/eliminar_cuenta.php" method="post">
        <button type="submit" class="btn btn-danger">Eliminar Cuenta</button>
    </form>
</div>

<?php
<<<<<<< Updated upstream
include("includes/footer.php");
=======
include("../includes/footer.php");
>>>>>>> Stashed changes
?>
