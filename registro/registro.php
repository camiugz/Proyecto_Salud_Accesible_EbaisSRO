<?php
$pageTitle = "Registro";
include("includes/header.php");
?>

<div class="container mt-5">
    <h1>Registro</h1>
    <p>Seleccione el tipo de registro:</p>
    <button class="btn btn-primary" onclick="showMedicoForm()">Registro Médico</button>
    <button class="btn btn-secondary" onclick="showPacienteForm()">Registro Paciente</button>

    <div id="formularioMedico" style="display: none;">
        <h2>Registro Médico</h2>
        <form action="registro/procesar_registro_medico.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <input type="text" name="codigo" placeholder="Código Médico" required>
            <input type="text" name="especialidad" placeholder="Especialidad" required>
            <input type="email" name="email" id="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    <div id="formularioPaciente" style="display: none;">
        <h2>Registro Paciente</h2>
        <form action="registro/procesar_registro_paciente.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('btnRegistrarMedico').addEventListener('click', function() {
        document.getElementById('formularioMedico').style.display = 'block';
        document.getElementById('formularioPaciente').style.display = 'none';
    });

    document.getElementById('btnRegistrarPaciente').addEventListener('click', function() {
        document.getElementById('formularioPaciente').style.display = 'block';
        document.getElementById('formularioMedico').style.display = 'none';
    });

    // Validación de correo electrónico para médicos
    document.querySelector('#formularioMedico form').addEventListener('submit', function(e) {
        var email = document.getElementById('emailMedico').value;
        if (!email.endsWith('@ebaissro.go.cr')) {
            alert('El correo electrónico no tiene el dominio institucional correcto');
            e.preventDefault();
        }
    });
</script>

<?php
include("includes/footer.php");
?>