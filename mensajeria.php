<?php
$pageTitle = "Mensajería";
include("includes/header.php");

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: inicio_sesion.php");
    exit();
}
?>

<div class="container mt-5">
    <h1>Mensajería y Consultas Virtuales</h1>
    <div id="chat">
        <!-- Implementar chat en tiempo real -->
    </div>
    <form id="mensajeForm">
        <input type="text" id="mensajeInput" placeholder="Escribe tu mensaje aquí...">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<script>
    // JavaScript para manejar la mensajería en tiempo real usando AJAX
    document.getElementById('mensajeForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const mensaje = document.getElementById('mensajeInput').value;
        // Enviar mensaje al servidor usando AJAX
    });
</script>

<?php
include("includes/footer.php");
?>
