--Borrado de tablas
DROP TABLE menu;
DROP TABLE condicion;
DROP TABLE empresa;
DROP TABLE experiencia;
DROP TABLE comentario;
DROP TABLE imagen;
DROP TABLE administrador;

--Reinicio del indice de las tablas

ALTER TABLE menu AUTO_INCREMENT =1
ALTER TABLE condicion AUTO_INCREMENT =1
ALTER TABLE empresa AUTO_INCREMENT =1
ALTER TABLE experiencia AUTO_INCREMENT =1
ALTER TABLE comentario AUTO_INCREMENT =1
ALTER TABLE imagen AUTO_INCREMENT =1
ALTER TABLE administrador AUTO_INCREMENT =1
