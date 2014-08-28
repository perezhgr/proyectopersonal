CREATE TABLE categoria (
id_categoria       INT(10) NOT NULL AUTO_INCREMENT,
nombre_categoria   VARCHAR (50) NULL,
descripcion	   	   TEXT (65000) NULL,
id_categoria_padre INT(10) NOT NULL,

CONSTRAINT PK_CATEGORIA PRIMARY KEY (id_categoria),
CONSTRAINT FK_CATEGORIA_PADRE FOREIGN KEY (id_categoria_padre) REFERENCES categoria (id_categoria) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;

CREATE TABLE lmiel (
id_lmiel       INT(10) NOT NULL AUTO_INCREMENT,
nombre_pareja  VARCHAR (50)  NOT NULL,
fecha	   	   DATE NOT NULL,
id_categoria   INT(10) NOT NULL ,

CONSTRAINT PK_LMIEL PRIMARY KEY (id_lmiel),
CONSTRAINT FK_LMIEL_CATEGORIA FOREIGN KEY (id_categoria) REFERENCES categoria (id_categoria) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;



CREATE TABLE ciudad (
id_ciudad          INT(10) NOT NULL AUTO_INCREMENT,
nombre_ciudad 	   VARCHAR (50) NOT NULL,
duracion		   TEXT (50) NOT NULL,
precio			   VARCHAR (50) NOT NULL,
descripcion	       VARCHAR (100) NULL,
id_categoria       INT(10) NOT NULL ,

CONSTRAINT PK_CIUDAD PRIMARY KEY (id_ciudad),
CONSTRAINT FK_CIUDAD_CATEGORIA FOREIGN KEY (id_categoria) REFERENCES categoria (id_categoria) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE imagen (
id_imagen    INT(10) NOT NULL AUTO_INCREMENT,
path		 VARCHAR(30) NOT NULL,	
id_categoria INT(10) NULL ,
id_ciudad    INT(10) NOT NULL,

CONSTRAINT PK_IMAGEN PRIMARY KEY (id_imagen),
CONSTRAINT FK_IMAGEN_CIUDAD FOREIGN KEY (id_ciudad) REFERENCES ciudad (id_ciudad) ON DELETE CASCADE,
CONSTRAINT FK_IMAGEN_CATEGORIA FOREIGN KEY (id_categoria) REFERENCES categoria (id_categoria) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;
  

CREATE TABLE administrador(
id_administrador INT( 11 ) NOT NULL AUTO_INCREMENT ,
mail VARCHAR( 50 ) NOT NULL ,
pass VARCHAR( 50 ) NOT NULL ,
PRIMARY KEY (id_administrador)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 AUTO_INCREMENT =1;
