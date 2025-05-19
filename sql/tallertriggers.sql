DROP DATABASE IF EXISTS triggers;
CREATE DATABASE triggers;
USE triggers;



-- Volcando estructura para tabla tiendaonline.articulo
DROP TABLE IF EXISTS estudiantes;
CREATE TABLE estudiantes(
    id INT AUTO_INCREMENT PRIMARY KEY,  
    nombre VARCHAR(50),    
    nota_final FLOAT (3,2) DEFAULT 0
    );

DROP TABLE IF EXISTS pruebas;
CREATE TABLE pruebas(
    id INT AUTO_INCREMENT PRIMARY KEY,  
    nombre VARCHAR(50),    
    porcentaje FLOAT (4,2)
    );

DROP TABLE IF EXISTS notas;
CREATE TABLE notas(
    id INT AUTO_INCREMENT PRIMARY KEY,  
    id_estudiantes INT,
    id_pruebas INT,
    nota FLOAT(3,2),
    FOREIGN KEY (id_estudiantes) REFERENCES estudiantes (id),
    FOREIGN KEY (id_pruebas) REFERENCES pruebas (id)
    );


INSERT estudiantes (nombre) VALUE ('Federico Duque');
INSERT estudiantes (nombre) VALUE ('Edison Betancurt');
INSERT estudiantes (nombre) VALUE ('Leandro Loaisa');

INSERT pruebas (nombre, porcentaje) VALUE ('Python', 0.4);
INSERT pruebas (nombre, porcentaje) VALUE ('Css', 0.3);
INSERT pruebas (nombre, porcentaje) VALUE ('Php', 0.3);

INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (1,1,5);
INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (1,2,4.5);
INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (1,3,4);

INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (2,1,3);
INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (2,2,4);
INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (2,3,4.5);

INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (3,1,4.8);
INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (3,2,4);
INSERT notas (id_estudiantes, id_pruebas, nota) VALUE (3,3,4.3);

