# Creacion de la BD
DROP DATABASE IF EXISTS concesionario;
CREATE DATABASE IF NOT EXISTS concesionario character set utf8mb4;
USE concesionario;

# Creacion de la tablas
CREATE TABLE IF NOT EXISTS coches (
 id INT (10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 modelo VARCHAR (100) NOT NULL,
 marca VARCHAR (50) NOT NULL,
 precio FLOAT(20,2),
 stock INT (255) DEFAULT 0 NOT NULL
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS grupos (
 id INT (10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 nombre VARCHAR (100) NOT NULL,
 ciudad VARCHAR (100)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS vendedores (
 id INT (10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 grupo_id INT (10) UNSIGNED,
 jefe INT (10) UNSIGNED,
 nombre VARCHAR (100) UNIQUE NOT NULL,
 apellidos VARCHAR (100),
 cargo VARCHAR (25),
 fecha_alta DATE,
 sueldo FLOAT(20,2),
 comision FLOAT(10,2),
 CONSTRAINT fk_v_g FOREIGN KEY(grupo_id) REFERENCES grupos(id),
 # Llave reflexiva
 CONSTRAINT fk_v_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS clientes (
 id INT (10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 vendedor_id INT (10) UNSIGNED,
 nombre VARCHAR (100),
 ciudad VARCHAR (100),
 gastado FLOAT (50,2),
 fecha DATE,
 CONSTRAINT fk_c_v FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS encargos (
 id INT (10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 cliente_id INT (10) UNSIGNED,
 coche_id INT (10) UNSIGNED,
 cantidad INT (100),
 fecha DATE,
 CONSTRAINT fk_e_cli FOREIGN KEY (cliente_id) REFERENCES clientes(id),
 CONSTRAINT fk_e_co FOREIGN KEY (coche_id) REFERENCES coches(id)
)ENGINE = INNODB;