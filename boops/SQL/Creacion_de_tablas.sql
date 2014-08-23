--Creacion de tabla seccion
CREATE TABLE seccion (
id_seccion     INT(10) NOT NULL AUTO_INCREMENT,
nombre_seccion VARCHAR (50)  NULL,
descripcion	   VARCHAR (100) NULL,
CONSTRAINT PK_SECCION PRIMARY KEY (id_seccion)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


--Creacion de tabla categoria
CREATE TABLE categoria (
id_categoria     INT(10) NOT NULL AUTO_INCREMENT,
nombre_categoria VARCHAR (50) NOT NULL,
descripcion	   	 TEXT (65000) NULL,
id_seccion   	 INT(10) NOT NULL,
CONSTRAINT PK_CATEGORIA PRIMARY KEY (id_categoria),
CONSTRAINT FK_CATEGORIA_SECCION FOREIGN KEY (id_seccion) REFERENCES seccion (id_seccion) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;

