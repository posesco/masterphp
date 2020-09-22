DROP DATABASE IF EXISTS notas_master;
CREATE DATABASE IF NOT EXISTS notas_master character set utf8mb4;
use notas_master;

CREATE TABLE IF NOT EXISTS usuarios (
 id        INT (255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 nombre    VARCHAR (100) NOT NULL,
 apellidos VARCHAR (100) NOT NULL,
 email     VARCHAR (255) UNIQUE,
 password  VARCHAR (255) NOT NULL,
 fecha     DATETIME DEFAULT CURRENT_TIMESTAMP
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS notas(
id              INT (255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
usuario_id      INT (255) UNSIGNED,
titulo          VARCHAR (255) NOT NULL,
descripcion     MEDIUMTEXT,
fecha           DATETIME DEFAULT CURRENT_TIMESTAMP,
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

INSERT INTO usuarios (nombre, apellidos, email, password)
  VALUES ('Stephen Edwin', 'King', 'sek@yopmail.com', 'secret'),
         ('Joanne', 'Rowling', 'jr@yopmail.com', 'secret'),
         ('Daniel', 'Brown', 'db@yopmail.com', 'secret'),
         ('John', 'Katzenbach ', 'jk@yopmail.com', 'secret'),
         ('John Ronald', 'Reuel Tolkien', 'jrrt@yopmail.com', 'secret'),
         ('Miguel', 'de Unamuno', 'mdu@yopmail.com', 'secret'),
         ('Arturo', 'Pérez Reverte', 'apr@yopmail.com', 'secret'),
         ('Jesus David', 'Posada Escobar', 'posesco@gmail.com', 'secret'),
         ('George Raymond', 'Richard Martin', 'grgm@yopmail.com', 'secret');

INSERT INTO notas (usuario_id, titulo, descripcion)
  VALUES (1, 'Ingeniero', 'No se que cantidad de cosas'),
         (2, 'Electro', 'No se que cantidad de cosas'),
         (3, 'Mecanico', 'No se que cantidad de cosas'),
         (4, 'Medico', 'No se que cantidad de cosas'),
         (5, 'Enfermero', 'No se que cantidad de cosas'),
         (6, 'Psicologo', 'No se que cantidad de cosas'),
         (7, 'Informatico', 'No se que cantidad de cosas'),
         (8, 'Profesor', 'No se que cantidad de cosas'),
         (9, 'Tecnico', 'No se que cantidad de cosas'),
         (1, 'Nota 1', 'Si se puede progresar sin ratas'),
         (2, 'Nota 2', 'Si se puede progresar sin ratas'),
         (3, 'Nota 3', 'Si se puede progresar sin ratas'),
         (4, 'Nota 4', 'Si se puede progresar sin ratas'),
         (5, 'Nota 5', 'Si se puede progresar sin ratas'),
         (6, 'Nota 6', 'Si se puede progresar sin ratas'),
         (7, 'Nota 7', 'Si se puede progresar sin ratas'),
         (8, 'Nota 8', 'Si se puede progresar sin ratas'),
         (9, 'Nota 9', 'Si se puede progresar sin ratas');
         