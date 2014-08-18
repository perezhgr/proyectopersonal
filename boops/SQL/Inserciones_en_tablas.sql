--Inserciones en la tabla categoria
INSERT INTO `tuparvt`.`categoria` (`nombre_categoria`,`descripcion`) VALUES 
('Lugares destacados',''), 

('Tupar Viajes y Turismo','FIRENZE VIAJES, Empresa de Viajes y Turismo, inició sus actividades en 1990.
A través de su existencia se ha especializado en Viajes de Placer y de Negocios, y comercializa FunTime,
un producto único y novedoso que se ha desarrollado con un creciente suceso.
Firenze Viajes está entre las primeras agencias de todo el país en cantidad de pasajeros transportados. 
Nuestros antecedentes prometen soluciones a la medida del cliente, con el servicio y 
la calidad que nos caracterizan y respaldan.'), 

('Elija su destino',''), 

('Pasaje aereo','Utilice este formulario para solicitar su presupuesto de pasaje aéreo
Estaremos en contacto a la brevedad.'),

('Luna de miel','Tu sueño hecho realidad'),


('Consejos a la hora de viajar',''), 
('Envienos su consulta','Utilice este formulario para contactar con nuestro equipo. 
Le enviaremos una respuesta a la brevedad. (max. 24 horas)');


--Inserciones en la tabla seccion
INSERT INTO `tuparvt`.`seccion` (`nombre_seccion`, `descripcion`, `id_categoria`) VALUES 
('', 'Esta es la seccion de lo que seria home', '1'),
('Empresa', '', '2'), 
('Paquetes', '', '3'), 
('Vuelos', '', '4'), 
('Luna de miel', '', '5'), 
('Consejos', '', '6'), 
('Contactenos', '', '7');