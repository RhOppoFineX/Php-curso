Create Database yt_colores;
 use yt_colores;

 CREATE TABLE colores(
     Id_color Integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
     Color VARCHAR(25) NOT NULL,
     `Description` VARCHAR(200) NOT NULL
 );

INSERT INTO colores (Color,`Description`) values ('Primary', 'Este es un color azul'), ('Danger', 'Este es un color rojo');

 drop table colores;
