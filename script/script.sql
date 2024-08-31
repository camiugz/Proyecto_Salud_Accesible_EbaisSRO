CREATE DATABASE Salud_Accesible_Ebais_SRO;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    codigo VARCHAR(255),
    especialidad VARCHAR(255),
    fecha_nacimiento DATE,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('paciente', 'medico') NOT NULL
);

<<<<<<< Updated upstream
CREATE TABLE mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    emisor_id INT NOT NULL,
    receptor_id INT NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (emisor_id) REFERENCES usuarios(id),
    FOREIGN KEY (receptor_id) REFERENCES usuarios(id)
);

=======
>>>>>>> Stashed changes
CREATE TABLE datos_salud (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT NOT NULL,
    glucosa DECIMAL(5, 2),
    presion_sistolica INT,
    presion_diastolica INT,
    colesterol FLOAT,
    colesterol_ldl FLOAT,
    colesterol_hdl FLOAT,
    frecuencia_cardiaca INT,
    oxigeno_sangre FLOAT,
    trigliceridos FLOAT,
    temperatura FLOAT,
    peso FLOAT,
    altura FLOAT,
    imc FLOAT,
    sintomas TEXT,
    alergias TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (paciente_id) REFERENCES usuarios(id)
);

CREATE TABLE recordatorios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    fecha_hora DATETIME NOT NULL,
    FOREIGN KEY (paciente_id) REFERENCES usuarios(id)
);
