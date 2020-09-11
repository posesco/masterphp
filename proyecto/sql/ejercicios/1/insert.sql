# COCHES
INSERT INTO coches (modelo, marca, precio, stock)
VALUES ('Renaul Clio', 'Renault', 12000, 13),
       ('Seat Panda','Seat',1000,10), 
       ('Mercedes Ranchera','Mercedes Benz',32000,24), 
       ('Porche Cayene','Porche',65000,5), 
       ('Lambo Aventador','Lamborgini',170000,2), 
       ('Ferrari Spider','Ferrari',24500,80);
# GRUPOS
INSERT INTO grupos (nombre, ciudad)
VALUES ('Vendedores A','Cucuta'),
       ('Vendedores B','Cucuta'), 
       ('Directores Mecanicos','Cucuta'), 
       ('Vendedores A','Bucaramanga'), 
       ('Vendedores B','Bucaramanga'), 
       ('Vendedores A','Manizales'), 
       ('Vendedores B','Manizales'), 
       ('Vendedores A','Medellin'), 
       ('Vendedores B','Medellin'), 
       ('Vendedores A','Pamplona'), 
       ('Vendedores B','Pamplona'), 
       ('Vendedores A','Toledo'), 
       ('Vendedores B','Toledo');

# VENDEDORES
INSERT INTO vendedores (grupo_id, jefe, nombre, apellidos, cargo, fecha_alta, sueldo, comision)
VALUES (1,NULL,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),185000,4),
       (1,1,'Elliot','Posada Carvajal','Ayudante en Tienda',CURDATE(),37000,3), 
       (2,NULL,'Daniel','Habif','Responsable de Tienda',CURDATE(),70000,5), 
       (2,3,'Victor Manuel','Sambrano Arenas','Ayudande en Tienda',CURDATE(),55000,6), 
       (3,NULL,'Javier Eduardo','Carvajal Escobar','Mecanico Jefe',CURDATE(),10000,2), 
       (4,NULL,'Richard','Acosta','Vendedor Recambios',CURDATE(),14500,8), 
       (5,NULL,'Johanna Karina','Carvajal Ortega','Vendedor Experto',CURDATE(),10000,2), 
       (6,NULL,'Billy','Graham','Ejecutivo de Cuentas',CURDATE(),80000,1), 
       (6,8,'Saulo','De Tarso','Ayudante de Tienda',CURDATE(),10000,10);

# CLIENTES
INSERT INTO clientes (vendedor_id, nombre, ciudad, gastado, fecha)
VALUES (1, 'Constructora Monape', 'Cucuta', 24000, CURDATE()),
       (2, 'Wiedii SAS', 'Pamplona', 40000, CURDATE()), 
       (2, 'Applus Energy', 'Bucaramanga', 32000, CURDATE()), 
       (5, 'Hotel Imperial', 'Medellin', 96000, CURDATE()), 
       (5, 'Italo Ink', 'Manizales', 170000, CURDATE()), 
       (6, 'Emsitel SAS', 'Toledo', 245000, CURDATE()); 

# ENCARGOS
INSERT INTO encargos (cliente_id, coche_id, cantidad, fecha)
VALUES (1,1,2,CURDATE()),
       (2,2,4,CURDATE()),
       (3,3,1,CURDATE()),
       (4,3,3,CURDATE()),
       (5,5,1,CURDATE()),
       (6,6,1,CURDATE());
