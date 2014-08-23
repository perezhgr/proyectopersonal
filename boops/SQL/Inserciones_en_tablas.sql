--Inserciones en la tabla seccion
INSERT INTO `tuparvt`.`seccion` (`nombre_seccion`, `descripcion`) VALUES 
('', 'Esta es la seccion de lo que seria home'),
('Empresa', ''), 
('Paquetes', ''), 
('Vuelos', ''), 
('Luna de miel', ''), 
('Consejos', ''), 
('Contactenos', '');


--Inserciones en la tabla categoria
INSERT INTO `tuparvt`.`categoria` (`nombre_categoria`,`descripcion`,`id_seccion`) VALUES 
('Lugares destacados','','1'), 

('Tupar Viajes y Turismo','FIRENZE VIAJES, Empresa de Viajes y Turismo, inició sus actividades en 1990.
A través de su existencia se ha especializado en Viajes de Placer y de Negocios, y comercializa FunTime,
un producto único y novedoso que se ha desarrollado con un creciente suceso.
Firenze Viajes está entre las primeras agencias de todo el país en cantidad de pasajeros transportados. 
Nuestros antecedentes prometen soluciones a la medida del cliente, con el servicio y 
la calidad que nos caracterizan y respaldan.','2'), 

('Elija su destino','','3'), 

('Pasaje aereo','Utilice este formulario para solicitar su presupuesto de pasaje aéreo
Estaremos en contacto a la brevedad.','4'),

('Luna de miel','Tu sueño hecho realidad','5'),


('Consejos a la hora de viajar','','6'), 

('Envienos su consulta','Utilice este formulario para contactar con nuestro equipo. 
Le enviaremos una respuesta a la brevedad. (max. 24 horas)','7');


