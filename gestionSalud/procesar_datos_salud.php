<?php
include("includes/db.php");

$usuario = $_SESSION['usuario'];
$glucosa = $_POST['glucosa'];
$presion_sistolica = $_POST['presion_sistolica'];
$presion_diastolica = $_POST['presion_diastolica'];
$colesterol = $_POST['colesterol'];
$colesterol_ldl = $_POST['colesterol_ldl'];
$colesterol_hdl = $_POST['colesterol_hdl'];
$frecuencia_cardiaca = $_POST['frecuencia_cardiaca'];
$oxigeno_sangre = $_POST['oxigeno_sangre'];
$imc = $_POST['imc'];
$trigliceridos = $_POST['trigliceridos'];
$sintomas = $_POST['sintomas'];
$alergias = $_POST['alergias'];

// Verificar si los datos ya existen
$sql = "SELECT * FROM datos_salud WHERE usuario='$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Actualizar los datos si ya existen
    $sql = "UPDATE datos_salud SET glucosa='$glucosa', presion_sistolica='$presion_sistolica', presion_diastolica='$presion_diastolica',
            colesterol='$colesterol', colesterol_ldl='$colesterol_ldl', colesterol_hdl='$colesterol_hdl',
            frecuencia_cardiaca='$frecuencia_cardiaca', oxigeno_sangre='$oxigeno_sangre', imc='$imc',
            trigliceridos='$trigliceridos', sintomas='$sintomas', alergias='$alergias'
            WHERE usuario='$usuario'";
} else {
    // Insertar nuevos datos
    $sql = "INSERT INTO datos_salud (usuario, glucosa, presion_sistolica, presion_diastolica, colesterol, colesterol_ldl, colesterol_hdl,
            frecuencia_cardiaca, oxigeno_sangre, imc, trigliceridos, sintomas, alergias)
            VALUES ('$usuario', '$glucosa', '$presion_sistolica', '$presion_diastolica', '$colesterol', '$colesterol_ldl', '$colesterol_hdl',
            '$frecuencia_cardiaca', '$oxigeno_sangre', '$imc', '$trigliceridos', '$sintomas', '$alergias')";
}

if ($conn->query($sql) === TRUE) {
    header("Location: gestionSalud/gestion_salud.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
