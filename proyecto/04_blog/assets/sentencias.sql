# Creacion de la BD

DROP DATABASE IF EXISTS blog_master;
CREATE DATABASE IF NOT EXISTS blog_master character set utf8mb4;
USE blog_master;

# Creacion de la tablas
CREATE TABLE IF NOT EXISTS usuarios (
 id INT (255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 nombre VARCHAR (25) NOT NULL,
 apellido VARCHAR (25) NOT NULL,
 email VARCHAR (25) UNIQUE,
 pass VARCHAR (50) NOT NULL,
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS categorias (
 id INT (255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 nombre VARCHAR (25) NOT NULL
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS entradas (
 id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 usuario_id INT (255) UNSIGNED NOT NULL,
 categorias_id INT (255) UNSIGNED NOT NULL, 
 titulo VARCHAR (50) NOT NULL,
 descripcion MEDIUMTEXT,
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_E_U FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
 CONSTRAINT fk_E_C FOREIGN KEY(categorias_id) REFERENCES categorias(id)
)ENGINE = INNODB;

# Insercion de Datos

INSERT INTO usuarios (nombre, apellido, email, pass)
  VALUES ('Stephen Edwin', 'King', 'sek@yopmail.com', SHA('clavesegura1')),
         ('Joanne', 'Rowling', 'jr@yopmail.com', SHA('clavesegura2')),
         ('Daniel', 'Brown', 'db@yopmail.com', SHA('clavesegura3')),
         ('John', 'Katzenbach ', 'jk@yopmail.com', SHA('clavesegura4')),
         ('John Ronald', 'Reuel Tolkien', 'jrrt@yopmail.com', SHA('clavesegura5')),
         ('Miguel', 'de Unamuno', 'mdu@yopmail.com', SHA('clavesegura6')),
         ('Arturo', 'Pérez Reverte', 'apr@yopmail.com', SHA('clavesegura7')),
         ('George Raymond', 'Richard Martin', 'grgm@yopmail.com', SHA('clavesegura8'));

INSERT INTO categorias(nombre)
  VALUES ('Accion'),
         ('Roll'),
         ('Deportes');

INSERT INTO entradas(usuario_id, categorias_id, titulo, descripcion)
  VALUES (1, 2,'Mi primer juego de Roll', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate, dolor sed vehicula bibendum, mauris ligula rutrum mi, eu' ),
         (3, 2,'Review LOL Online', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate, dolor sed vehicula bibendum, mauris ligula rutrum mi, eu' ),
         (7, 1,'Mortal Kombat todo lo que debes saber', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate, dolor sed vehicula bibendum, mauris ligula rutrum mi, eu' ),
         (5, 1,'Fortnite', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate, dolor sed vehicula bibendum, mauris ligula rutrum mi, eu' ),
         (5, 1,'Este es mi primer post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate, dolor sed vehicula bibendum, mauris ligula rutrum mi, eu' ),
         (4, 2,'Jugue WOW y pailas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate, dolor sed vehicula bibendum, mauris ligula rutrum mi, eu' ),
         (2, 3,'Este es mi primer post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate, dolor sed vehicula bibendum, mauris ligula rutrum mi, eu' );