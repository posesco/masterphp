# Modificar comisiones al 2% y luego al 0.5% si el vendedor gana mas de 50000
UPDATE vendedores SET comision=2 WHERE sueldo > 50000;
UPDATE vendedores SET comision= 0.5 WHERE sueldo > 50000;

# Incrementar el precio de todos los coches en 2% }
UPDATE coches SET precio = (precio*1.02);

#  Mostrar a todos los vendedores cuya fecha de alta sea menor a 2020-09-11
SELECT * FROM vendedores WHERE fecha_alta < '2020-09-11';

# Listar todos los vendedores con su nombre y el numero de dias que llevan en el concesionario
SELECT nombre, DATEDIFF(CURDATE(), fecha_alta) AS 'Dias' FROM vendedores;

# Listar el nombre y apellidos en una misma columna su fecha de registro y dia de la semana cuando se registraron
SELECT CONCAT(nombre,' ',apellidos) AS 'Nombre_Completo', fecha_alta, DAYNAME(fecha_alta) AS 'Dia_Semana' 
FROM vendedores;

# Nombre y salario de vendedores con cargo Ayudante de Tienda
SELECT nombre, sueldo FROM vendedores WHERE cargo LIKE '%Ayudante%';

#  Visualizar todos los coches en cuya marca exita la letra A y cuyo modelo empiece por F
SELECT * FROM coches WHERE marca LIKE '%a%' OR modelo REGEXP '^F';  

# Mostrar todos los vendedores del grupo 2 ordenados por salario de >  a <
SELECT * FROM vendedores WHERE grupo_id = 2 ORDER BY sueldo DESC;

# Visualizar los apellidos de los vendedores su fecha y su numero de grupo ordenado por fecha desendente y limitar a los 4 ultimos
SELECT apellidos, fecha_alta, grupo_id FROM vendedores ORDER BY fecha_alta DESC LIMIT 4;

# Visualizar todos los cargos de los vendedores y el numero de vendores que hay en  cada cargos
SELECT cargo, COUNT(id) FROM vendedores GROUP BY cargo ORDER BY COUNT(id) DESC;

# Conseguir la masa salarial anual del concesionario
SELECT SUM(sueldo) AS 'Masa_Salarias' FROM vendedores;

# Sacar la media de los salarios entre todos los vendedores del grupo y mostrar el nombre del grupo 
SELECT AVG(v.sueldo) AS 'Media_Salario', g.nombre AS 'Grupo', g.ciudad FROM vendedores v
    INNER JOIN grupos g ON g.id = v.grupo_id
    GROUP BY v.grupo_id;

# Ver unidades totales vendidas de cada coche a cada cliente mostrando el nombre del producto el nombre de cliente y la suma de unidades 
SELECT c.modelo AS 'MODELO_CARRO', cl.nombre AS 'NOMBRE_CLIENTE', SUM(e.cantidad) AS 'UND_VENDIDAS'
FROM encargos e
INNER JOIN coches c ON c.id = e.coche_id
INNER JOIN clientes cl ON e.cliente_id = cl.id
GROUP BY e.coche_id, e.cliente_id;

# Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron 
SELECT c.nombre, COUNT(e.id) AS 'ENCARGOS' FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;

# Obtener listado de clientes atendidos por el Vendedor "Elliot"
SELECT * FROM clientes WHERE vendedor_id = (SELECT id FROM vendedores WHERE nombre = 'Elliot');

# Obtener listado con los encargos realizados por el cliente 'Fruteria Antonia Inc'
SELECT e.id AS 'N_ENCARGO', cantidad, c.nombre, co.modelo, e.fecha
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN 
(SELECT id FROM clientes WHERE nombre = 'Wiedii SAS');

# Listar los clientes que han hecho algun encargo del coche "Mercedes Ranchera"
SELECT * FROM clientes WHERE id IN 
(SELECT cliente_id FROM encargos WHERE coche_id 
    IN (SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));

# Obtener los vendedores con 2 o más clientes.
SELECT * FROM vendedores WHERE id IN
    (SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2 );

#Seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo.
SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo = (
    SELECT MAX(sueldo) FROM vendedores
));

# Obtener los nombre y ciudades de los clientes con encargos de 3 unidades adelante
SELECT nombre, ciudad FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE cantidad >= 3);

# Mostrar listado de clientes (numero de cliente y el nombre) mostrar tambien el numero de vendedor y su nombre.
SELECT c.id, c.nombre, v.id, CONCAT(v.nombre,' ',v.apellidos) as 'VENDEDOR'
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;

#Listar todos los encargos realizados con la marca del coche y el nombre del cliente.
SELECT e.id, co.marca, c.nombre FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id;

#Listar los encargos con el nombre del coche, el nombre del cliente y el nombre de la ciudad, pero unicamente cuando sean de Barcelona.
SELECT e.id, co.modelo, c.nombre, c.ciudad FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE c.ciudad = 'Pamplona';

# Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulado
SELECT ci.nombre, SUM(precio*cantidad) AS "IMPORTE" 
FROM clientes ci 
INNER JOIN encargos en ON ci.id = en.cliente_id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY ci.nombre
ORDER BY 2 ASC;

# Sacar los vendedores que tienen jefe y sacar el nombre del jefe
SELECT CONCAT(v1.nombre,' ',v1.apellidos) AS 'VENDEDOR', CONCAT(v2.nombre, ' ', v2.apellidos) AS 'JEFE' 
FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;

# Visualizar los nombres de los clientes y la cantidad de encargos realizados, incluyendos los que no hayan realizado encargos.
INSERT INTO clientes VALUES(NULL, 5, 'Tienda Organica Inc', 'Murcia', 0, CURDATE());

SELECT c.nombre, COUNT(e.id) FROM clientes c
LEFT JOIN encargos e ON c.id = e.cliente_id
GROUP BY 1; 

# Mostrar todos los vendedores y el numero de clientes. Se deben mostrar tengan o no clientes
SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;
#Crear una vista llamada vendedoresA que incluirá todos los vendedores del grupo que se llame "Vendedores A"

CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN 
    (SELECT id FROM grupos WHERE nombre="Vendedores A");

# Mostrar los datos del vendedor con mas antiguedad en el concesionario.
SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

# Obtener EL COCHE con mas unidades vendidas.
SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN
        (SELECT MAX(cantidad) FROM encargos));