USE clase;

CREATE TABLE IF NOT EXISTS alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO alumnos (nombre, email) VALUES 
('Ejemplo 1', 'ejemplo1@test.com'),
('Ejemplo 2', 'ejemplo2@test.com');
