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
    Gigas VARCHAR(15),
    direccion VARCHAR(255),
    PRIMARY KEY(id)
);

-- Insertar datos en la tabla de clientes
INSERT INTO clientes (nombre, apellido, email, telefono, direccion) VALUES
('Maykel', 'Espinoza', 'maykel.espinoza@m14.com', '1234567890', 'Calle 123, 08042, Barcelona'),
('Jordi', 'Adrover', 'jordi.adrover@m14.com', '0987654321', 'Avenida 456, 08042, Barcelona');

CREATE USER IF NOT EXISTS 'm14'@'%' IDENTIFIED BY 'm14';
GRANT ALL PRIVILEGES ON *.* TO 'm14'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;