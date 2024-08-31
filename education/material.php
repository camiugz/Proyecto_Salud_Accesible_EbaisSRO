<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Material Educativo</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<script src="jquery-3.7.1.min.js"></script>

<body class="education">
    <header>
        <h1>Material Educativo sobre Enfermedades</h1>
        <nav>
            <ul>
                <li><a href="#cronicas">Enfermedades Crónicas</a></li>
                <li><a href="#diabetes">Diabetes</a></li>
                <li><a href="#hipertension">Hipertensión</a></li>
                <li><a href="#asma">Asma</a></li>
                <li><a href="ver_solicitudes.php">Ver Solicitudes</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <?php
        include 'php/db.php';

        function mostrar_documento($conn, $nombre_seccion) {
            $stmt = $conn->prepare("SELECT ruta_pdf FROM documentos WHERE nombre = ?");
            $stmt->bind_param("s", $nombre_seccion);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $ruta_pdf = htmlspecialchars($row["ruta_pdf"], ENT_QUOTES, 'UTF-8');
                    echo '<a href="uploads/' . $ruta_pdf . '" download>Descargar PDF</a>';
                }
            } else {
                echo "<p>No hay documentos disponibles.</p>";
            }
        
            $stmt->close();
        }
        ?>

        <section id="cronicas">
            <h2>Enfermedades Crónicas</h2>
            <?php mostrar_documento($conn, "Enfermedades Crónicas"); ?>
        </section>

        <section id="diabetes">
            <h2>Diabetes</h2>
            <?php mostrar_documento($conn, "Diabetes"); ?>
        </section>

        <section id="hipertension">
            <h2>Hipertensión</h2>
            <?php mostrar_documento($conn, "Hipertension"); ?>
        </section>

        <section id="asma">
            <h2>Asma</h2>
            <?php mostrar_documento($conn, "Asma"); ?>
        </section>
        
        <section>
    <h2>Solicitar Documento</h2>
    <form action="solicitar_documento.php" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <label for="id">Cédula:</label>
        <input type="text" id="id" name="id" required>

        <label for="document">¿Sobre cuál enfermedad desea más información?</label>
        <textarea id="document" name="document" required></textarea>

        <button type="submit">Solicitar</button>
    </form>
       </section>

        <section>
            <h2>Subir Un Documento</h2>
            <a href="php/upload.php" class="btn">Cargar</a>
        </section>
    </main>

    <footer>
        <p>@2024 Salud Accesible. Todos los derechos reservados</p>
    </footer>
</body>
</html>



