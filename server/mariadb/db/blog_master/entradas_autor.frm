TYPE=VIEW
query=select `e`.`id` AS `id`,`e`.`titulo` AS `titulo`,`u`.`nombre` AS `Autor`,`c`.`nombre` AS `Categoria` from ((`blog_master`.`entradas` `e` join `blog_master`.`usuarios` `u` on(`e`.`usuario_id` = `u`.`id`)) join `blog_master`.`categorias` `c` on(`e`.`categorias_id` = `c`.`id`)) order by `e`.`id`
md5=b31faf21701ec1975798ce8cc0ae4f6c
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2020-09-10 20:37:00
create-version=2
source=SELECT e.id, e.titulo, u.nombre AS \'Autor\', c.nombre AS \'Categoria\' FROM entradas e\n    INNER JOIN usuarios u ON e.usuario_id = u.id\n    INNER JOIN categorias c ON e.categorias_id = c.id\n    ORDER BY e.id
client_cs_name=latin1
connection_cl_name=latin1_swedish_ci
view_body_utf8=select `e`.`id` AS `id`,`e`.`titulo` AS `titulo`,`u`.`nombre` AS `Autor`,`c`.`nombre` AS `Categoria` from ((`blog_master`.`entradas` `e` join `blog_master`.`usuarios` `u` on(`e`.`usuario_id` = `u`.`id`)) join `blog_master`.`categorias` `c` on(`e`.`categorias_id` = `c`.`id`)) order by `e`.`id`
mariadb-version=100505
