<?php
$pageTitle = "Inicio de Sesión";
include("includes/header.php");
?>

<div class="container mt-5">
    <h1>Inicio de Sesión</h1>
    <form action="procesar_inicio_sesion.php" method="post">
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
</div>

<?php
include("includes/footer.php");
?>
