CREATE DATABASE IF NOT EXISTS hotel_db;
USE hotel_db;

CREATE TABLE habitaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50),
    precio DECIMAL(6,2),
    descripcion TEXT
);

CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_cliente VARCHAR(100),
    habitacion_id INT,
    fecha_entrada DATE,
    fecha_salida DATE,
    FOREIGN KEY (habitacion_id) REFERENCES habitaciones(id)
);

INSERT INTO habitaciones (tipo, precio, descripcion) VALUES
    ('Individual', 50, 'Cama simple'), ('Doble', 80, 'Cama matrimonio'), ('Suite', 150, 'Vistas al mar');