<?php
$pageTitle = "Registro";
<<<<<<< Updated upstream
include("includes/header.php");
=======
include("../includes/header.php");
>>>>>>> Stashed changes
?>

<div class="container mt-5">
    <h1>Registro</h1>
    <p>Seleccione el tipo de registro:</p>
<<<<<<< Updated upstream
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
=======
    <button class="btn btn-primary" id="btnRegistrarMedico">Registro Médico</button>
    <button class="btn btn-secondary" id="btnRegistrarPaciente">Registro Paciente</button>

    <div id="formularioMedico" style="display: none;" class="mt-4">
        <h2>Registro Médico</h2>
        <form id="formMedico" action="./procesar_registro_medico.php" method="post">
             <input type="text" name="nombre" placeholder="Nombre" required>
             <input type="text" name="apellidos" placeholder="Apellidos" required>
             <input type="text" name="codigo" placeholder="Código Médico" required>
            <input type="text" name="especialidad" placeholder="Especialidad" required>
            <input type="email" name="email" id="emailMedico" placeholder="Correo Electrónico" required>
>>>>>>> Stashed changes
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

<<<<<<< Updated upstream
    <div id="formularioPaciente" style="display: none;">
        <h2>Registro Paciente</h2>
        <form action="registro/procesar_registro_paciente.php" method="post">
=======
    <div id="formularioPaciente" style="display: none;" class="mt-4">
        <h2>Registro Paciente</h2>
        <form id="formPaciente" action="./procesar_registro_paciente.php" method="post">
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
    // Validación de correo electrónico para médicos
    document.querySelector('#formularioMedico form').addEventListener('submit', function(e) {
        var email = document.getElementById('emailMedico').value;
        if (!email.endsWith('@ebaissro.go.cr')) {
            alert('El correo electrónico no tiene el dominio institucional correcto');
            e.preventDefault();
        }
=======
    document.getElementById('formMedico').addEventListener('submit', function(e) {
        e.preventDefault();  // Evitar el envío normal del formulario
        var form = this;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", form.action, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                if (response.includes("success")) {
                    window.location.href = "../inicio_sesion.php";
                } else {
                    alert(response.split("=")[1]);  // Muestra el mensaje de error
                }
            }
        };

        var data = new FormData(form);
        xhr.send(new URLSearchParams(data).toString());
    });

    document.getElementById('formPaciente').addEventListener('submit', function(e) {
        e.preventDefault();  // Evitar el envío normal del formulario
        var form = this;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", form.action, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                if (response.includes("success")) {
                    window.location.href = "../inicio_sesion.php";
                } else {
                    alert(response.split("=")[1]);  // Muestra el mensaje de error
                }
            }
        };

        var data = new FormData(form);
        xhr.send(new URLSearchParams(data).toString());
>>>>>>> Stashed changes
    });
</script>

<?php
<<<<<<< Updated upstream
include("includes/footer.php");
?>
=======
include("../includes/footer.php");
?>
>>>>>>> Stashed changes
