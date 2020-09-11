TYPE=VIEW
query=select `concesionario`.`vendedores`.`id` AS `id`,`concesionario`.`vendedores`.`grupo_id` AS `grupo_id`,`concesionario`.`vendedores`.`jefe` AS `jefe`,`concesionario`.`vendedores`.`nombre` AS `nombre`,`concesionario`.`vendedores`.`apellidos` AS `apellidos`,`concesionario`.`vendedores`.`cargo` AS `cargo`,`concesionario`.`vendedores`.`fecha_alta` AS `fecha_alta`,`concesionario`.`vendedores`.`sueldo` AS `sueldo`,`concesionario`.`vendedores`.`comision` AS `comision` from `concesionario`.`vendedores` where `concesionario`.`vendedores`.`grupo_id` in (select `concesionario`.`grupos`.`id` from `concesionario`.`grupos` where `concesionario`.`grupos`.`nombre` = \'Vendedores A\')
md5=e298bf1977ef2a8c6202f229aba22824
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2020-09-11 16:03:28
create-version=2
source=SELECT * FROM vendedores WHERE grupo_id IN \n    (SELECT id FROM grupos WHERE nombre="Vendedores A")
client_cs_name=latin1
connection_cl_name=latin1_swedish_ci
view_body_utf8=select `concesionario`.`vendedores`.`id` AS `id`,`concesionario`.`vendedores`.`grupo_id` AS `grupo_id`,`concesionario`.`vendedores`.`jefe` AS `jefe`,`concesionario`.`vendedores`.`nombre` AS `nombre`,`concesionario`.`vendedores`.`apellidos` AS `apellidos`,`concesionario`.`vendedores`.`cargo` AS `cargo`,`concesionario`.`vendedores`.`fecha_alta` AS `fecha_alta`,`concesionario`.`vendedores`.`sueldo` AS `sueldo`,`concesionario`.`vendedores`.`comision` AS `comision` from `concesionario`.`vendedores` where `concesionario`.`vendedores`.`grupo_id` in (select `concesionario`.`grupos`.`id` from `concesionario`.`grupos` where `concesionario`.`grupos`.`nombre` = \'Vendedores A\')
mariadb-version=100505
