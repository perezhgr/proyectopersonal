
INSERT INTO `tuparvt`.`condicion` (`condicion`) VALUES 
('Luna de miel'),
('Persona viajando sola'),
('Viaje de negocios'), 
('Parejas de jovenes'), 
('Familia con niños pequeños'),
('Familia con niños mayores'),
('Grupo de amigos');





INSERT INTO `tuparvt`.`empresa` (`titulo`,`cuerpo`,`path`) VALUES 
('¿Quienes somos?','Tupar Viajes y Turismo, inició sus actividades como agencia de viajes en Argentina el año 2001.Nuestra empresa internacionalmente, posee agencias propias en Chile, Perú y Colombia. Cuenta con un departamento de atención a empresas especializado en viajes de negocios. Tupar VyT se ha destacado en el mercado por su perfil innovador y su preocupación constante por entregar un servicio de primera clase, que logra equilibrar calidad, precio y formas de pago. Por esta razón, es la agencia de viajes con mayor crecimiento de los últimos años, ocupando un lugar de privilegio entre las principales empresas de la industria.','img/somos.jpg'),
('Nuestra Misión','Lograr optimizar los costos de viaje de su empresa ofreciendo el mejor servicio, condiciones y beneficios, los cuales serán traducidos en un ahorro para su empresa.','img/mision.jpg'),
('Nuestra Visión',' Ser la agencia de viajes más eficiente del mercado del turismo corporativo, satisfaciendo de esta forma las necesidades de nuestros pasajeros de negocio.','img/vision.jpg'),
('Su empresa puede ir muy lejos','Nuestros vínculos comerciales tanto en Argentina como en el extranjero, permiten ofrecer a su empresa mejores tarifas y condiciones en los principales hoteles nacionales y cadenas internacionales, tarifas preferenciales en líneas aéreas y servicios de traslados.Administraremos y gestionaremos para su empresa acuerdos de descuento con proveedores según sus necesidades.','img/lejos.jpg');




INSERT INTO `tuparvt`.`ciudad` (`nombre_ciudad`, `duracion`, `precio`) VALUES 
('Amsterdam', '3 dias.', '5000'),
('Berlin', '6 dias', '5000'),
('Ciudad del Cabo','5 dias', '6000'),
('Dubai', '4 dias.', '10000'), 
('Londres', '4 dias', '4490'),
('Nueva York','14 dias', '4000'), 
('Paris', '4 dias.', '10000'), 
('Sidney', '20 dias', '15000');








INSERT INTO `imagen` (`path`,`id_ciudad`) VALUES

('img/amsterdam.jpg','1'),
('img/amsterdam2.jpg','1'),
('img/amsterdam3.jpg','1'),

('img/berlin.jpg','2'),
('img/berlin2.jpg','2'),
('img/berlin3.jpg','2'),

('img/cape.jpg','3'),
('img/cape2.jpg','3'),
('img/cape3.jpg','3'),

('img/dubai.jpg','4'),
('img/dubai2.jpg','4'),
('img/dubai3.jpg','4'),

('img/london.jpg','5'),
('img/london2.jpg','5'),
('img/london3.jpg','5'),

('img/ny.jpg','6'),
('img/ny2.jpg','6'),
('img/ny3.jpg','6'),

('img/paris.jpg','7'),
('img/paris2.jpg','7'),
('img/paris3.jpg','7'),

('img/sidney.jpg','8'),
('img/sidney2.jpg','8'),
('img/sidney3.jpg','8');







INSERT INTO `tuparvt`.`usuario` (`nombre`,`mail`,`pass`,`es_admin`) VALUES 
('Hugo','perez.hgr@gmail.com','397728967ab813da1a4319e18f71aaf9','1');




INSERT INTO `tuparvt`.`comentario` (`texto`, `id_usuario`,`id_ciudad`,`id_condicion`) VALUES
('Estuvo genial', '2','2','1'), 
('Muy buen servicio', '2','3','7'),
('Excelente atención','2','4','4');


