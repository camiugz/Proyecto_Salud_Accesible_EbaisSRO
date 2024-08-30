<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Subir Documento PDF</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Subir Documento PDF</h1>
    </header>

<main>
        <section>
            <form action="subir_pdf.php" method="POST" enctype="multipart/form-data">
                <label for="nombre">Nombre del Documento:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>

                <label for="pdf">Selecciona el PDF:</label>
                <input type="file" id="pdf" name="pdf" accept="application/pdf" required></br>

                <button type="submit">Subir PDF</button>
            </form>
        </section>
    </main>

    <footer>
        <p>@2024 Salud Accesible. Todos los derechos reservados</p>
    </footer>
</body>
</html>