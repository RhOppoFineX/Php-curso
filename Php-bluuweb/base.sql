Create Database yt_colores;
 use yt_colores;

 CREATE TABLE colores(
     Id_color Integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
     Color VARCHAR(25) NOT NULL,
     `Description` VARCHAR(200) NOT NULL
 );

INSERT INTO colores (Color,`Description`) values ('Primary', 'Este es un color azul'), ('Danger', 'Este es un color rojo');

--  drop table colores;

CREATE TABLE Usuarios(
    Id_usuario INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    Nombre_usuario VARCHAR(25) NOT NULL,
    Email VARCHAR(50) NOT NULL UNIQUE, 
    `Password` VARCHAR(250) NOT NULL
);
