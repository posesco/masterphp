# Vista: Se define como una consulta almacenada en la BD que se utiliza como una tabla virtual, no almacena datos solo se usa
# como asociaciones entre las tablas reales. Esto ayuda a bajar la carga de procesamiento en el servidor, ademas evita recopiar codigo

# Crear vista
CREATE VIEW entradas_autor AS
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' FROM entradas e
    INNER JOIN usuarios u ON e.usuario_id = u.id
    INNER JOIN categorias c ON e.categorias_id = c.id
    ORDER BY e.id;

# Eliminar vista
DROP VIEW entradas_autor; 