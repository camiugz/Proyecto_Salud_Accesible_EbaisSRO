<?php
$pageTitle = "Perfil de Paciente";
include("includes/header.php");

// Verificar si el usuario está logueado como paciente
if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] != 'paciente') {
    header("Location: inicio_sesion.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Perfil de Paciente</h1>
    <form action="perfilUsuario/procesar_perfil_paciente.php" method="post">
        <!-- Los campos del formulario deben estar pre-rellenados con los datos actuales del usuario -->
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellidos" placeholder="Apellidos" required>
        <input type="text" name="numero_contacto" placeholder="Número de Contacto" required>
        <input type="text" name="cedula" placeholder="Cédula" required>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
        <input type="text" name="genero" placeholder="Género" required>
        <input type="text" name="tipo_sangre" placeholder="Tipo de Sangre" required>
        <input type="text" name="peso" placeholder="Peso (kg)" required>
        <input type="text" name="altura" placeholder="Altura (cm)" required>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    <form action="perfilUsuario/eliminar_cuenta.php" method="post">
        <button type="submit" class="btn btn-danger">Eliminar Cuenta</button>
    </form>
</div>

<?php
include("includes/footer.php");
?>
