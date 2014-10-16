CREATE TABLE categoria (
id_categoria       INT(10) NOT NULL AUTO_INCREMENT,
nombre_categoria   VARCHAR (50) NULL,
CONSTRAINT PK_CATEGORIA PRIMARY KEY (id_categoria)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE subcategoria (
id_subcategoria       INT(10) NOT NULL AUTO_INCREMENT,
nombre_subcategoria      VARCHAR (50) NULL,
descripcion           TEXT(65000) NULL,
id_categoria          INT(10) NOT NULL,

CONSTRAINT PK_SUBCATEGORIA PRIMARY KEY (id_subcategoria),
CONSTRAINT FK_CATEGORIA FOREIGN KEY (id_categoria) REFERENCES categoria (id_categoria) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;

DROP TABLE subcategoria;
DROP TABLE categoria;


CREATE TABLE subcategoria_ciudad (
id_subcategoria_ciudad          INT(10) NOT NULL AUTO_INCREMENT,
id_subcategoria   				INT (10) NOT NULL,
id_ciudad	   	   				INT(10)  NOT NULL,

CONSTRAINT PK_SUBCATEGORIA_CIUDAD PRIMARY KEY (id_subcategoria_ciudad),
CONSTRAINT FK_SUBCATEGORIA FOREIGN KEY (id_subcategoria) REFERENCES subcategoria (id_subcategoria) ON DELETE CASCADE,
CONSTRAINT FK_CIUDAD FOREIGN KEY (id_ciudad) REFERENCES ciudad (id_ciudad) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;

CREATE TABLE ciudad (
id_ciudad          INT(10) NOT NULL AUTO_INCREMENT,
nombre_ciudad 	   VARCHAR (50) NOT NULL,
duracion		   VARCHAR (20) NOT NULL,
precio			   VARCHAR (50) NOT NULL,
descripcion	       TEXT (65000) NULL,
CONSTRAINT PK_CIUDAD PRIMARY KEY (id_ciudad)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE imagen (
id_imagen    INT(10) NOT NULL AUTO_INCREMENT,
path		 VARCHAR(30) NOT NULL,	
CONSTRAINT PK_IMAGEN PRIMARY KEY (id_imagen)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE subcategoria_imagen (
id_subcategoria_imagen          INT(10) NOT NULL AUTO_INCREMENT,
id_subcategoria   				INT(10) NOT NULL,
id_imagen	   	   				INT(10)  NOT NULL,

CONSTRAINT PK_SUBCATEGORIA_IMAGEN PRIMARY KEY (id_subcategoria_imagen),
CONSTRAINT FK_SUBCATEGORIA2 FOREIGN KEY (id_subcategoria) REFERENCES subcategoria (id_subcategoria) ON DELETE CASCADE,
CONSTRAINT FK_IMAGEN FOREIGN KEY (id_imagen) REFERENCES imagen (id_imagen) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;
Editar







CREATE TABLE experiencia (
id_persona     INT(10) NOT NULL AUTO_INCREMENT,
nombre_persona VARCHAR (50)  NOT NULL,
condicion	   VARCHAR (50)  NOT NULL,
fecha	   	   DATE NOT NULL,
id_ciudad      INT(10) NOT NULL ,

CONSTRAINT PK_EXPERIENCIA PRIMARY KEY (id_persona),
CONSTRAINT FK_EXP_CIUDAD FOREIGN KEY (id_ciudad) REFERENCES ciudad (id_ciudad) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE comentario (
id_comentario      INT(10) NOT NULL AUTO_INCREMENT,
texto	   	   	   TEXT (65000) NULL,
id_persona 		   INT(10) NOT NULL,

CONSTRAINT PK_COMENTARIO PRIMARY KEY (id_comentario),
CONSTRAINT FK_COMENTARIO_PERSONA FOREIGN KEY (id_persona) REFERENCES experiencia (id_persona) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE administrador(
id_administrador INT( 11 ) NOT NULL AUTO_INCREMENT ,
mail VARCHAR( 50 ) NOT NULL ,
pass VARCHAR( 50 ) NOT NULL ,
PRIMARY KEY (id_administrador)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 AUTO_INCREMENT =1;
