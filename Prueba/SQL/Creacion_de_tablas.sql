--Comando para reiniciar el autoincremento de una tabla
ALTER TABLE menu AUTO_INCREMENT = 1 
---------------------------------------------------------------------------------

CREATE TABLE menu (
id_menu            INT(10) NOT NULL AUTO_INCREMENT,
nombre_menu        VARCHAR (50) NULL,
CONSTRAINT PK_MENU PRIMARY KEY (id_menu)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE ciudad (
id_ciudad          INT(10) NOT NULL AUTO_INCREMENT,
nombre_ciudad 	   VARCHAR (50) NOT NULL,
duracion		   VARCHAR (20) NOT NULL,
precio			   VARCHAR (50) NOT NULL,
descripcion	       TEXT (65000) NOT NULL,
CONSTRAINT PK_CIUDAD PRIMARY KEY (id_ciudad)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE empresa (
id_empresa         INT(10) NOT NULL AUTO_INCREMENT,
titulo       	   TEXT (65000) NOT NULL,
cuerpo      	   TEXT (65000) NOT NULL,

CONSTRAINT PK_EMPRESA PRIMARY KEY (id_empresa)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE imagen (
id_imagen    INT(10)     NOT NULL AUTO_INCREMENT,
path		 VARCHAR(30) NOT NULL,
id_ciudad    INT(10)     NULL,
id_empresa   INT(10)     NULL,

CONSTRAINT PK_IMAGEN PRIMARY KEY (id_imagen),
CONSTRAINT FK_IMAGEN_CIUDAD FOREIGN KEY (id_ciudad) REFERENCES ciudad (id_ciudad) ON DELETE CASCADE,
CONSTRAINT FK_IMAGEN_EMPRESA FOREIGN KEY (id_empresa) REFERENCES empresa (id_empresa) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;




---TODO ESTO HAY QUE REVISARLO
CREATE TABLE condicion (
id_condicion        INT(10) NOT NULL AUTO_INCREMENT,
condicion	   	   	VARCHAR (200) NOT NULL,

CONSTRAINT PK_CONDICION PRIMARY KEY (id_condicion)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE experiencia (
id_persona     INT(10) NOT NULL AUTO_INCREMENT,
nombre_persona VARCHAR (50)  NOT NULL,
fecha	   	   DATE NOT NULL,
id_condicion   INT(10) NOT NULL ,
id_ciudad      INT(10) NOT NULL ,

CONSTRAINT PK_EXPERIENCIA PRIMARY KEY (id_persona),
CONSTRAINT FK_EXP_CONDICION FOREIGN KEY (id_condicion) REFERENCES condicion (id_condicion) ON DELETE CASCADE,
CONSTRAINT FK_EXP_CIUDAD FOREIGN KEY (id_ciudad) REFERENCES ciudad (id_ciudad) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE comentario (
id_comentario      INT(10) NOT NULL AUTO_INCREMENT,
texto	   	   	   TEXT (65000) NOT NULL,
id_usuario 		   INT(10) NOT NULL,

CONSTRAINT PK_COMENTARIO PRIMARY KEY (id_comentario),
CONSTRAINT FK_COMENTARIO_USUARIO FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE usuario(
id_usuario INT( 11 ) NOT NULL AUTO_INCREMENT ,
nombre     VARCHAR( 50 ) NOT NULL , 
mail 	   VARCHAR( 50 ) NOT NULL ,
pass 	   VARCHAR( 50 ) NOT NULL ,
es_admin   TINYINT (1)   NULL,

PRIMARY KEY (id_usuario)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 AUTO_INCREMENT =1;
