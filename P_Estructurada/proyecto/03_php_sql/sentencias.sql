# Creacion de la BD
DROP DATABASE IF EXISTS php_mysql;
CREATE DATABASE IF NOT EXISTS php_mysql character set utf8mb4;
USE php_mysql;

# Creacion de la tablas
CREATE TABLE IF NOT EXISTS notas (
 id INT (255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 titulo VARCHAR (255),
 descripcion MEDIUMTEXT,
 color VARCHAR (255)
)ENGINE = INNODB;

# Insercion de datos

INSERT INTO notas (titulo, descripcion, color) 
VALUES ('Nota 1','Hacer los ejercicios de SQL','red'),
       ('Aprendiendo PHP','Master en PHP de Victor Robles','yellow');
