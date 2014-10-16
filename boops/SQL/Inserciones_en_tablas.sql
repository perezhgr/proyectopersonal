--Inserciones en la tabla categoria
INSERT INTO `tuparvt`.`categoria` (`nombre_categoria`) VALUES 
('Empresa'), 
('Paquetes'), 
('Experiencias'), 
('Contactenos');

--Inserciones en la tabla subcategoria

INSERT INTO `tuparvt`.`subcategoria` (`nombre_subcategoria`,`descripcion`,`id_categoria`) VALUES 
('Tupar Viajes y Turismo', 'Tupar Viajes y Turismo, Empresa de Viajes y Turismo, inició sus actividades en 1990. A través de su existencia se ha especializado en Viajes de Placer y de Negocios, y comercializa FunTime, un producto único y novedoso que se ha desarrollado con un creciente suceso. Firenze Viajes está entre las primeras agencias de todo el país en cantidad de pasajeros transportados. Nuestros antecedentes prometen soluciones a la medida del cliente, con el servicio y la calidad que nos caracterizan y respaldan.', '1'),
('Elija su destino', '', '2'),
('Experiencias de nuestros viajeros', 'Tu sueño hecho realidad.', '3'), 
('Envienos su consulta','Utilice este formulario para contactar con nuestro equipo. 
Le enviaremos una respuesta a la brevedad. (max. 24 horas)','4');

--Inserciones en la tabla imagen

INSERT INTO `imagen` (`path`) VALUES
('img/ams1.jpg'),
('img/ams2.jpg'),
('img/ams3.jpg'),
('img/ber1.jpg'),
('img/ber2.jpg'),
('img/ber3.jpg'),
('img/p1.jpg'),
('img/p2.jpg'),
('img/p3.jpg'),
('img/sid1.jpg'),
('img/sid2.jpg'),
('img/sid3.jpg');

--Inserciones en la tabla ciudad

INSERT INTO `tuparvt`.`ciudad` (`nombre_ciudad`, `duracion`, `precio`, `descripcion`) VALUES 
('Amsterdam', '3 dias.', '$5000', ''),
('Ciudad del Cabo', '5 dias', '$6000',''),
('Copenhague', '4 dias.', '$10000', ''), 
('Barcelona', '20 dias', '$15000',''),
('Berlin', '5 dias', '$5000', ''), 
('Kiev', '6 dias.', '$4000',''), 
('Los Angeles', '6 dias.', '$5600'),
('Londres', '4 dias', '$4490', ''),
('Nueva York', '6 dias', '$9000'),
('Paris', '2 dias', '$12000',''),
('Estocolmo', '6 dias.', '$6700', ''), 
('Sidney', '10 dias.', '$22000', ''),
('Amsterdam', '3 dias.', '$5000', ''),
('Ciudad del Cabo', '5 dias', '$6000',''),
('Copenhague', '4 dias.', '$10000', ''), 
('Barcelona', '20 dias', '$15000',''),
('Berlin', '5 dias', '$5000', ''), 
('Kiev', '6 dias.', '$4000',''), 
('Los Angeles', '6 dias.', '$5600',''),
('Londres', '4 dias', '$4490', ''),
('Nueva York', '6 dias', '$9000',''),
('Paris', '2 dias', '$12000',''),
('Estocolmo', '6 dias.', '$6700', ''), 
('Sidney', '10 dias.', '$22000', '');


--Inserciones en la tabla categoria_ciudad_imagen

INSERT INTO `tuparvt`.`categoria_ciudad_imagen` (`id_categoria`, `id_ciudad`, `id_imagen`) VALUES 
('1', '1', '1'),
('1', '5', '2');