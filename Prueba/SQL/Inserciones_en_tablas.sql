--Inserciones en la tabla categoria
INSERT INTO `tuparvt`.`menu` (`nombre_menu`) VALUES 
('Inicio'), 
('Acerca'), 
('Paquetes'),
('Contacto');

-----------------------------------------------------------------------------
--Inserciones en la tabla condicion

INSERT INTO `tuparvt`.`condicion` (`condicion`) VALUES 
('Luna de miel'),
('Persona viajando sola'),
('Viaje de negocios'), 
('Parejas de jovenes'), 
('Familia con niños pequeños'),
('Familia con niños mayores'),
('Grupo de amigos');
-------------------------------------------------------------------------------

--Inserciones en la tabla empresa
INSERT INTO `tuparvt`.`empresa` (`titulo`,`cuerpo`) VALUES 
('¿Quienes somos?','Tupar Viajes y Turismo, inició sus actividades como agencia de viajes en Argentina el año 2001.Es una empresa nacional filial perteneciente al holding Falabella S.A.C.I. e incorporada a la Asociación Internacional de Transporte Aéreo IATA.Nuestra empresa internacionalmente, posee agencias propias en Chile, Perú y Colombia. Cuenta con un departamento de atención a empresas especializado en viajes de negocios. Además, con un área de planificación y organización de viajes de incentivos y congresos, tanto en Argentina como en el extranjero.Viajes Falabella se ha destacado en el mercado por su perfil innovador y su preocupación constante por entregar un servicio de primera clase, que logra equilibrar calidad, precio y formas de pago. Por esta razón, es la agencia de viajes con mayor crecimiento de los últimos años, ocupando un lugar de privilegio entre las principales empresas de la industria.'),
('Nuestra Misión','Lograr optimizar los costos de viaje de su empresa ofreciendo el mejor servicio, condiciones y beneficios, los cuales serán traducidos en un ahorro para su empresa.'),
('Nuestra Visión',' Ser la agencia de viajes más eficiente del mercado del turismo corporativo, satisfaciendo de esta forma las necesidades de nuestros pasajeros de negocio.'),
('Su empresa puede ir muy lejos','Nuestros vínculos comerciales tanto en Argentina como en el extranjero, permiten ofrecer a su empresa mejores tarifas y condiciones en los principales hoteles nacionales y cadenas internacionales, tarifas preferenciales en líneas aéreas y servicios de traslados.Administraremos y gestionaremos para su empresa acuerdos de descuento con proveedores según sus necesidades.');


-------------------------------------------------------------------------------
--Inserciones en la tabla ciudad

INSERT INTO `tuparvt`.`ciudad` (`nombre_ciudad`, `duracion`, `precio`, `descripcion`) VALUES 
('Amsterdam', '3 dias.', '$5000', 'descripcion1'),
('Berlin', '6 dias', '$5000','descripcion2'),
('Ciudad del Cabo','5 dias', '$6000','descripcion3'),
('Dubai', '4 dias.', '$10000', 'descripcion4'), 
('Londres', '4 dias', '$4490','descripcion5'),
('Nueva York','14 dias', '$4000','descripcion6'), 
('Paris', '4 dias.', '$10000', 'descripcion7'), 
('Sidney', '20 dias', '$15000','descripcion8');


--------------------------------------------------------------------------------
--Insercion en la experiencia
INSERT INTO `tuparvt`.`experiencia` (`nombre_persona`, `fecha`,`id_condicion`,`id_ciudad`) VALUES
('Hugo','2014-2-13', '1','1'), 
('Maria', '2013-12-12', '2','1'),
('Jose', '2014-9-9', '6','1');
--------------------------------------------------------------------------------

--Insercion en la comentario
INSERT INTO `tuparvt`.`comentario` (`texto`, `id_persona`) VALUES
('Estuvo genial', '1'), 
('Muy buen servicio', '2'),
('Excelente atención','3');
--------------------------------------------------------------------------------

--Inserciones en la tabla imagen

INSERT INTO `imagen` (`path`,`id_ciudad`,`id_empresa`) VALUES
('img/empresa/empresa.jpg',NULL,'1'),
('img/empresa/mision.jpg',NULL,'2'),
('img/empresa/vision.jpg',NULL,'3'),
('img/empresa/lejos.jpg',NULL,'4'),


('img/amsterdam.jpg','1',NULL),
('img/amsterdam2.jpg','1',NULL),
('img/amsterdam3.jpg','1',NULL),

('img/berlin.jpg','2',NULL),
('img/berlin2.jpg','2',NULL),
('img/berlin3.jpg','2',NULL),

('img/cape.jpg','3',NULL),
('img/cape2.jpg','3',NULL),
('img/cape3.jpg','3',NULL),

('img/dubai.jpg','4',NULL),
('img/dubai2.jpg','4',NULL),
('img/dubai3.jpg','4',NULL),

('img/london.jpg','5',NULL),
('img/london2.jpg','5',NULL),
('img/london3.jpg','5',NULL),

('img/ny.jpg','6',NULL),
('img/ny2.jpg','6',NULL),
('img/ny3.jpg','6',NULL),

('img/paris.jpg','7',NULL),
('img/paris2.jpg','7',NULL),
('img/paris3.jpg','7',NULL),

('img/sidney.jpg','8',NULL),
('img/sidney2.jpg','8',NULL),
('img/sidney3.jpg','8',NULL);

--Insercion en la tabla admin (pass = sitioweb2014)
INSERT INTO `tuparvt`.`administrador` (`mail`,`pass`) VALUES 
('perez.hgr@gmail.com','397728967ab813da1a4319e18f71aaf9');


