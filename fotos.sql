CREATE TABLE fotos (id MEDIUMINT NOT NULL AUTO_INCREMENT,titulo varchar(40),descripcion varchar(500),file varchar(500),user_id int,PRIMARY KEY (id));

CREATE TABLE comentarios (id MEDIUMINT NOT NULL AUTO_INCREMENT,comentario varchar(500),foto_id int,user_id int,PRIMARY KEY (id));

CREATE TABLE tags (id MEDIUMINT NOT NULL AUTO_INCREMENT,
					tag varchar(40),
					foto_id int,
					PRIMARY KEY (id));

CREATE TABLE categorias (id MEDIUMINT NOT NULL AUTO_INCREMENT,
					nombre varchar(140),
					foto_id int,
					PRIMARY KEY (id));

CREATE TABLE ciudades (id MEDIUMINT NOT NULL AUTO_INCREMENT,
					nombre varchar(140),
					foto_id int,
					PRIMARY KEY (id));

CREATE TABLE usuarios (id MEDIUMINT NOT NULL AUTO_INCREMENT,nombre varchar(140),password varchar(500),mail varchar(140),PRIMARY KEY (id));

CREATE TABLE albumes (id MEDIUMINT NOT NULL AUTO_INCREMENT,
					titulo varchar(140),
					foto_id int,
					PRIMARY KEY (id));

CREATE TABLE mensajes (id MEDIUMINT NOT NULL AUTO_INCREMENT,
					feed_id int,
					contenido varchar(100),
					readed int,
					PRIMARY KEY (id));

CREATE TABLE feeds (id MEDIUMINT NOT NULL AUTO_INCREMENT,
					titulo varchar(140),
					foto_id int,
					PRIMARY KEY (id));

CREATE TABLE follows (id MEDIUMINT NOT NULL AUTO_INCREMENT,
					user_following int,
					user_followed int,
					PRIMARY KEY (id));

CREATE TABLE favoritos (id MEDIUMINT NOT NULL AUTO_INCREMENT,
					user_id int,
					foto_id int,
					PRIMARY KEY (id));