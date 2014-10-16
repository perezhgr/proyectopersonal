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


--Inserciones en la tabla consejo

INSERT INTO `tuparvt`.`consejo` (`nombre_consejo`, `descripcion`, `id_categoria`) VALUES 
('Tasas de Aeropuertos o puertos', 'Verifique si están incluidas en su pasaje. En caso de no estarlo, consulte su valor a fin de prever este gasto, con frecuencia, bastante elevado.', '6');

INSERT INTO `tuparvt`.`consejo` (`nombre_consejo`, `descripcion`, `id_categoria`) VALUES 
( 'Documentacion', 'Los Argentinos que viajen a países limítrofes deberán presentar DNI, Cédula de Identidad ó Pasaporte en buen estado emitido por la Policia federal.  Recordamos que las nuevas Cédulas de Identidad argentinas (Mercosur) tienen fecha de vencimiento que figura al dorso de la misma, por lo tanto, todos aquellos pasajeros argentinos o residentes que viajen con ese documento, deberán verificar su validez antes de viajar.
Si viaja a países NO limítrofes deberá presentar el pasaporte vigente con la visa correspondiente si fuera necesario. Algunos países exigen visa y otros sólo si su período de permanencia en el exterior es mayor a 60 días. Tambien hay países que además de visa, exigen que el pasaporte tenga un período de validez mínima (por lo general mayor a seis meses).  Rogamos consultar con anticipación al Consulado correspondiente.
Los Pasaportes PRORROGADOS, RENOVADOS o EXPEDIDOS por las representaciones Consulares argentinas caducan cuando sus titulares ingresan al país de origen y es necesario obtener la correspondiente revalidación ante la Policía Federal Argentina.
Para conducir en el extranjero solo es necesario el Registro de conducir vigente; exepto en Europa, donde se necesita la libreta Internacional de conducir emitida por el Automóvil Club Argentino. Ante cualquier duda, consulte en el Automovil Club Argentino o en la entidad correspondiente.
Si viaja con menores de edad consultar en la seccion Viajar con Menores.', '6'),
('Mercaderias prohibidas para viajar', 'Las líneas aéreas prohíben embarcar con mercaderías inflamables, oxidables, explosivas, tóxicas, infecciosas o con gases radiactivos. Tampoco aceptan el transporte de armas de fuego, excepto que sean declaradas y se cuente con el permiso correspondiente.
Las aduanas extranjeras suelen prohibir el ingreso de plantas o alimentos. La yerba mate está permitida, pero se aconseja llevarla en su envase original a fin de demostrar así de qué se trata.
.Solo le está permitido llevar en su equipaje de mano pequeñas cantidades de líquidos. Estos líquidos tienen que ir en pequeños contenedores con una capacidad individual máxima de 100 ml.

- Cada pasajero tiene que empaquetar estos contenedores en una bolsa transparente de plástico con autocierre de no más de un litro de capacidad máxima (bolsa de aproximadamente 20 x 20 cm.) para facilitar la inspección de estos productos en los controles de seguridad.

- Los pasajeros deberán proveerse de dichas bolsas antes del inicio del viaje.

A efecto de las nuevas medidas, se consideran líquidos:

- Agua y otras bebidas.
- Perfumes y aerosoles
- Geles, como por ejemplo, gel de ducha o champú.
- Cremas, lociones y aceites, incluida la pasta de dientes.
- Contenidos de contenedores presurizados, incluido espumas de  afeitar, otras espumas y desodorantes.
- Cualquier otro de consistencia similar.

Si tiene cualquier duda, por favor, póngase en contacto con nosotros o la compañía aérea con antelación a su viaje.', '6'),
('Equipaje', 'Como se trata de políticas establecidas por cada Compañía Aérea, para mayor seguridad deberá consultar con su línea aérea.

En general la franquicia de transporte gratuito de equipaje varía en función de las condiciones especiales de la tarifa adquirida, así como el origen y destino de su viaje, que determinarán si corresponde aplicar el "sistema de peso" ó el "sistema de piezas".

En cuanto a los vuelos de cabotaje internos en Argentina las compañías Aerolíneas Argentina, LAN y Andes admiten en estos momentos hasta 15 Kg. para su despacho, mientras que aceptan 5 kilos para el equipaje de mano. 

Igualmente siempre recomendamos corroborar esta información. ', '6'),

('Cofre de seguridad', 'Muchos hoteles ofrecen cofres de seguridad de manera gratuita, mientras que otros cobran por este servicio. De todos modos, tengan o no cargo, este servicio debe usarse siempre para guardar los documentos, los pasajes aéreos y cualquier objeto de valor.', '6'),
('Viajar con menores', 'REGIMEN ACTUAL PARA LA SALIDA DE MENORES AL EXTERIOR

La Disposición 31100/05  modifica  la Resolución 2895/85 que regula la documentación necesaria para que un menor este autorizado a salir del país:  .

CASO A- SI EL MENOR SALE EN COMPAÑÍA DE SUS DOS PADRES

Documento de viaje (DNI o Cedula vigente, si se viaja a países limítrofes, Pasaporte al resto del mundo)

Partida de nacimiento del menor o libreta de familia donde este asentado el menor.

CASO B- EL MENOR SALE CON UNO DE SUS PADRES

Documento de viaje ((DNI o Cedula vigente, si se viaja a países limítrofes, Pasaporte al resto del mundo)

Partida de nacimiento del menor o libreta de familia donde este asentado el menor.

Autorización del otro progenitor dada ante autoridad judicial, escribano u otra autoridad pública competente.

CASO C - EL MENOR NO SALE CON SUS PADRES.

Es la única operatoria que se modificó en protección de los menores y a efectos de evitar el tráfico de los mismos.

1) MENOR QUE SALE SOLO

Documento de viaje (DNI o Cedula vigente, si se viaja a países limítrofes, Pasaporte al resto del mundo)

Partida de nacimiento del menor o libreta de familia donde este asentado el menor.

Autorización de los padres dada ante autoridad judicial, escribano u otra autoridad pública competente con los siguientes requisitos:

0 a 14 años de edad: La autorización de los padres', '6');


INSERT INTO `tuparvt`.`consejo` (`id_consejo`, `nombre_consejo`, `descripcion`, `id_categoria`) VALUES (NULL, 'Precauciones', 'Ciertos destinos requieren precauciones respecto al consumo de agua potable. Se recomienda beber sólo agua mineral, evitar el consumo de vegetales frescos, frutas con cáscara y hielo. Además, se recomienda usar agua mineral para la higiene bucal.', '6');