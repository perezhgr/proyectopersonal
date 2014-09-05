--Inserciones en la tabla categoria
INSERT INTO `tuparvt`.`menu` (`nombre_menu`) VALUES 
('Inicio'), 
('Acerca'), 
('Paquetes'),
('Testimonio'),
('Contacto');

--Inserciones en la tabla ciudad

INSERT INTO `tuparvt`.`ciudad` (`nombre_ciudad`,`nombre_pais`, `duracion`, `precio`, `descripcion`,`testimonio`) VALUES 
('Amsterdam','Holanda', '3 dias.', '$5000', 'descripcion1','s'),
('Ciudad del Cabo','Sudafrica','5 dias', '$6000','descripcion2',NULL),
('Paris','Francia', '4 dias.', '$10000', 'descripcion3',NULL), 
('Sidney','Australia', '20 dias', '$15000','descripcion4',NULL),
('Nueva York', 'EE.UU.','14 dias', '$4000','descripcion5','s'), 
('Berlin','Alemania', '6 dias', '$5000','descripcion6','s');
---------------------------------------------------------------

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
----------------------------------------------------------------

--Inserciones en la tabla empresa
INSERT INTO `tuparvt`.`empresa` (`titulo`,`cuerpo`) VALUES 
('¿Quienes somos?','Tupar Viajes y Turismo, inició sus actividades como agencia de viajes en Argentina el año 2001.Es una empresa nacional filial perteneciente al holding Falabella S.A.C.I. e incorporada a la Asociación Internacional de Transporte Aéreo IATA.Nuestra empresa internacionalmente, posee agencias propias en Chile, Perú y Colombia. Cuenta con un departamento de atención a empresas especializado en viajes de negocios. Además, con un área de planificación y organización de viajes de incentivos y congresos, tanto en Argentina como en el extranjero.Viajes Falabella se ha destacado en el mercado por su perfil innovador y su preocupación constante por entregar un servicio de primera clase, que logra equilibrar calidad, precio y formas de pago. Por esta razón, es la agencia de viajes con mayor crecimiento de los últimos años, ocupando un lugar de privilegio entre las principales empresas de la industria.'),
('Nuestra Misión','Lograr optimizar los costos de viaje de su empresa ofreciendo el mejor servicio, condiciones y beneficios, los cuales serán traducidos en un ahorro para su empresa.'),
('Nuestra Visión',' Ser la agencia de viajes más eficiente del mercado del turismo corporativo, satisfaciendo de esta forma las necesidades de nuestros pasajeros de negocio.'),
('Su empresa puede ir muy lejos','Nuestros vínculos comerciales tanto en Argentina como en el extranjero, permiten ofrecer a su empresa mejores tarifas y condiciones en los principales hoteles nacionales y cadenas internacionales, tarifas preferenciales en líneas aéreas y servicios de traslados.Administraremos y gestionaremos para su empresa acuerdos de descuento con proveedores según sus necesidades.');


--Inserciones en la tabla imagen

INSERT INTO `imagen` (`path`,`cover`,`id_ciudad`,`id_empresa`) VALUES
('img/amsterdam.jpg',NULL,'1',NULL),
('img/cape.pg',NULL,'2',NULL),
('img/paris.jpg',NULL,'3',NULL),
('img/berlin.jpg',NULL,'6',NULL),
('img/sidney3.jpg',NULL,'4',NULL),
('img/ny.jpg',NULL,'5',NULL),

('img/mision.jpg',NULL,NULL,'2'),
('img/vision.jpg',NULL,NULL,'3'),
('img/empresa.jpg',NULL,NULL,'1'),
('img/lejos.jpg',NULL,NULL,'4');

--Insercion en la tabla admin (sitioweb2014)
INSERT INTO `tuparvt`.`administrador` (`mail`,`pass`) VALUES 
('perez.hgr@gmail.com','397728967ab813da1a4319e18f71aaf9');

