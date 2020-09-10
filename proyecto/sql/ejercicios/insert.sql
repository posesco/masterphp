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
VALUES ('Vendedores A','Madrid'),
       ('Vendedores B','Madrid'), 
       ('Directores Mecanicos','Madrid'), 
       ('Vendedores A','Barcelona'), 
       ('Vendedores B','Barcelona'), 
       ('Vendedores A','Valencia'), 
       ('Vendedores B','Valencia'), 
       ('Vendedores A','Bilbao'), 
       ('Vendedores B','Bilbao'), 
       ('Vendedores A','Pamplona'), 
       ('Vendedores B','Pamplona'), 
       ('Vendedores A','Santiago de Compostela'), 
       ('Vendedores B','Santiago de Compostela');

# VENDEDORES
INSERT INTO vendedores (grupo_id, jefe, nombre, apellidos, cargo, fecha_alta, sueldo, comision)
VALUES (1,NULL,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4),
       (1,1,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4), 
       (2,NULL,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4), 
       (2,3,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4), 
       (3,NULL,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4), 
       (4,NULL,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4), 
       (5,NULL,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4), 
       (6,NULL,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4), 
       (6,8,'Jesus David','Posada Escobar','Responsable de Tienda',CURDATE(),10000,4), 

# CLIENTES
INSERT INTO clientes ()
VALUES (),
       (); 

# ENCARGOS
INSERT INTO encargos ()
VALUES (),
       (); 