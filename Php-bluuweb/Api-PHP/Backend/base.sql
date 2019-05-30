CREATE DATABASE Api;

use Api

CREATE TABLE dolar (
    Id INTEGER PRIMARY KEY NOT NULL Auto_increment, 
    Fecha DATE NOT NULL, 
    valor DOUBLE(6,2)
);

CREATE TABLE euro (
    Id INTEGER PRIMARY KEY NOT NULL Auto_increment, 
    Fecha DATE NOT NULL, 
    valor DOUBLE(6,2)
);

INSERT INTO dolar (Fecha, valor) VALUES ('2019-05-1', 700), ('2019-05-2', 701), ('2019-05-3', 702), ('2019-05-4', 703);
INSERT INTO euro (Fecha, valor) VALUES ('2019-05-1', 700), ('2019-05-2', 701), ('2019-05-3', 702), ('2019-05-4', 703);



