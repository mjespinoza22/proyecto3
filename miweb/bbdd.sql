-- Crear la base de datos

CREATE DATABASE IF NOT EXISTS proyecto;

-- Usar la base de datos creada

USE proyecto;

-- Crear la tabla de clientes

CREATE TABLE clientes (
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    email VARCHAR(100),
    GB contratados VARCHAR(15),
    direccion VARCHAR(255),
    PRIMARY KEY(id)
);

-- Insertar datos en la tabla de clientes

INSERT INTO clientes (nombre, apellido, email, Gigas, direccion) VALUES

('Maykel', 'Espinoza', 'maykel.espinoza@m14.com', '10', 'Calle 123, 08042, Barcelona'),
('Jordi', 'Adrover', 'jordi.adrover@m14.com', '10', 'Avenida 456, 08042, Barcelona');
