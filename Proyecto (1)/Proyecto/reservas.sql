CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    servicio VARCHAR(100) NOT NULL,
    horario TIME NOT NULL,
    mensaje TEXT
);
