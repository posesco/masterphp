# INNER JOIN
# La consulta realiza un agrupamiento de tablas tal que muestre el titulo de la entrada el autor y su categoria
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' FROM entradas e
    INNER JOIN usuarios u ON e.usuario_id = u.id
    INNER JOIN categorias c ON e.categorias_id = c.id
    ORDER BY e.id;
# Consultar la cantidad de entradas de cada categoria   
SELECT c.nombre, COUNT(e.id) AS 'Total_Entradas' FROM categorias c
    INNER JOIN entradas e ON e.categorias_id = c.id
    GROUP BY e.categorias_id;

# LEFT JOIN 

# Consultar la cantidad de entradas de cada categoria incluso si no hay entradas 
SELECT c.nombre, COUNT(e.id) AS 'Total_Entradas' FROM categorias c
    LEFT JOIN entradas e ON e.categorias_id = c.id
    GROUP BY e.categorias_id;

# RIGHT JOIN
# Consultar la cantidad de entradas de cada categoria incluso si no hay entradas 
SELECT c.nombre, COUNT(e.id) AS 'Total_Entradas' FROM entradas e
    RIGHT JOIN categorias c ON e.categorias_id = c.id
    GROUP BY e.categorias_id;