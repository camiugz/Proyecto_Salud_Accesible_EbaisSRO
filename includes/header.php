<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBAIS - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/index.php">Salud Accesible - Ebais San Rafael de Oreamuno</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto y más</a></li>
<<<<<<< Updated upstream
                <li class="nav-item"><a class="nav-link" href="registro.php">Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="inicio_sesion.php">Inicio de Sesión</a></li>
                <li class="nav-item"><a class="nav-link" href="material_educativo.php">Material Educativo</a></li>
                <?php if (isset($_SESSION['usuario'])): ?>
                    <?php if ($_SESSION['tipo_usuario'] == 'paciente'): ?>
                        <li class="nav-item"><a class="nav-link" href="/perfil_paciente.php">Perfil de Usuario</a></li>
                        <li class="nav-item"><a class="nav-link" href="/mensajeria.php">Mensajería y Consultas</a></li>
                        <li class="nav-item"><a class="nav-link" href="/gestion_salud.php">Gestión de la Salud</a></li>
                        <li class="nav-item"><a class="nav-link" href="/panel_control.php">Panel de Control</a></li>
                        <li class="nav-item"><a class="nav-link" href="/reportes_medicos.php">Reportes Médicos</a></li>
                    <?php elseif ($_SESSION['tipo_usuario'] == 'medico'): ?>
                        <li class="nav-item"><a class="nav-link" href="/perfil_medico.php">Perfil de Usuario</a></li>
                        <li class="nav-item"><a class="nav-link" href="/mensajeria.php">Mensajería y Consultas</a></li>
=======
                <li class="nav-item"><a class="nav-link" href="/registro/registro.php">Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="/inicio_sesion.php">Inicio de Sesión</a></li>
                <li class="nav-item"><a class="nav-link" href="material_educativo.php">Material Educativo</a></li>
                <?php if (isset($_SESSION['usuario'])): ?>
                    <?php if ($_SESSION['tipo_usuario'] == 'paciente'): ?>
                        <li class="nav-item"><a class="nav-link" href="/perfilUsuario/perfil_paciente.php">Perfil de Usuario</a></li>
                        <li class="nav-item"><a class="nav-link" href="/mensajeria.php">Mensajería y Consultas</a></li>
                        <li class="nav-item"><a class="nav-link" href="/gestionSalud/gestion_salud.php">Gestión de la Salud</a></li>
                        <li class="nav-item"><a class="nav-link" href="/gestionSalud/seguimiento_y_reportes/panel_control.php">Panel de Control</a></li>
                        <li class="nav-item"><a class="nav-link" href="/gestionSalud/seguimiento_y_reportes/reportes_medicos.php">Reportes Médicos</a></li>
                    <?php elseif ($_SESSION['tipo_usuario'] == 'medico'): ?>
                        <li class="nav-item"><a class="nav-link" href="/perfilUsuario/perfil_medico.php">Perfil de Usuario</a></li>
                        <li class="nav-item"><a class="nav-link" href="/mensajeria.php">Mensajería y Consultas</a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout.php">Cerrar Sesión</a></li>
>>>>>>> Stashed changes
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
