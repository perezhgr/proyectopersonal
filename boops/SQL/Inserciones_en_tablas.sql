--Inserciones en la tabla seccion
INSERT INTO `tuparvt`.`categoria` (`nombre_categoria`, `descripcion`,`id_categoria_padre`) VALUES 
('', 'Esta es la seccion de lo que seria home','1'),
('Empresa','', '2'), 
('Paquetes','', '3'), 
('Luna de miel','', '4'), 
('Consejos', '','5'), 
('Contactenos','', '6'),
('Lugares destacados', '', '1'), 
('Tupar Viajes y Turismo', 'Tupar Viajes y Turismo, Empresa de Viajes y Turismo, inició sus actividades en 1990. A través de su existencia se ha especializado en Viajes de Placer y de Negocios, y comercializa FunTime, un producto único y novedoso que se ha desarrollado con un creciente suceso. Firenze Viajes está entre las primeras agencias de todo el país en cantidad de pasajeros transportados. Nuestros antecedentes prometen soluciones a la medida del cliente, con el servicio y la calidad que nos caracterizan y respaldan.', '2'),
('Elija su destino', '', '3'),
('Luna de miel', 'Tu sueño hecho realidad.', '4'), 
('Consejos a la hora de viajar', '', '5'),
('Envienos su consulta','Utilice este formulario para contactar con nuestro equipo. 
Le enviaremos una respuesta a la brevedad. (max. 24 horas)','6');

--Inserciones en la tabla imagen

INSERT INTO `imagen` (`path`,`id_categoria`,`id_ciudad`) VALUES
('img/amsterdam.png','1','1'),
('img/capetown.png','1','2'),
('img/copenhagen.png','1','3'),
('img/barcelona.png','1','4'),
('img/germany.png ','1','5'),
('img/kiev.png','1','6'),
('img/la.png','1','7'),
('img/london.png','1','8'),
('img/nyc.png','1','9'),
('img/paris.png','1','10'),
('img/stockholm.png','1','11'),
('img/sydney.png','1','12');

--Inserciones en la tabla ciudad

INSERT INTO `tuparvt`.`ciudad` (`nombre_ciudad`, `duracion`, `precio`, `descripcion`,`id_categoria`) VALUES 
('Amsterdam', '3 dias.', '$5000', '','1'),
('Ciudad del Cabo', '5 dias', '$6000','','1'),
('Copenhague', '4 dias.', '$10000', '','1'), 
('Barcelona', '20 dias', '$15000','','1'),
('Berlin', '5 dias', '$5000', '','1'), 
('Kiev', '6 dias.', '$4000','','1'), 
('Los Angeles', '6 dias.', '$5600','','1'),
('Londres', '4 dias', '$4490', '','1'),
('Nueva York', '6 dias', '$9000','','1'),
('Paris', '2 dias', '$12000','','1'),
('Estocolmo', '6 dias.', '$6700', '','1'), 
('Sidney', '10 dias.', '$22000', '','1'),
('Amsterdam', '3 dias.', '$5000', '','3'),
('Ciudad del Cabo', '5 dias', '$6000','','3'),
('Copenhague', '4 dias.', '$10000', '','3'), 
('Barcelona', '20 dias', '$15000','','3'),
('Berlin', '5 dias', '$5000', '','3'), 
('Kiev', '6 dias.', '$4000','','3'), 
('Los Angeles', '6 dias.', '$5600','','3'),
('Londres', '4 dias', '$4490', '','3'),
('Nueva York', '6 dias', '$9000','','3'),
('Paris', '2 dias', '$12000','','3'),
('Estocolmo', '6 dias.', '$6700', '','3'), 
('Sidney', '10 dias.', '$22000', '','3');


--Inserciones en la tabla ciudad imagen
/*
INSERT INTO `tuparvt`.`ciudad_imagen` (`id_ciudad`, `id_imagen`) VALUES 
('1', '1'),
('2', '2'),
('3', '3'), 
('4', '4'), 
('5', '5'), 
('6', '6'),
('7', '7'),
('8', '8'), 
('9', '9'),
('10', '10'), 
('11', '11'),
('12', '12');

--Inserciones en la tabla categoria ciudad

INSERT INTO `tuparvt`.`categoria_ciudad` (`id_categoria`,`id_ciudad`) VALUES 
('1', '1'),
('1', '2'),
('1', '3'), 
('1', '4'), 
('1', '5'), 
('1', '6'),
('1', '7'),
('1', '8'), 
('1', '9'),
('1', '10'), 
('1', '11'),
('1', '12');