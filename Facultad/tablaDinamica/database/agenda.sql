

CREATE DATABASE Pruebas;

USE Pruebas

CREATE TABLE Persona(
    Id_persona INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    Nombre VARCHAR(50) NOT NULL, 
    Apellido VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Telefono VARCHAR(9) NOT NULL
);

INSERT INTO Persona (Nombre, Apellido, Email, Telefono) VALUES ('Mohamed', 'Salah', 'SalahIsABomber@gmail.com', '66304002');
INSERT INTO Persona (Nombre, Apellido, Email, Telefono) VALUES ('Heium Mid', 'Son', 'SonisaLaMeraVerga@gmail.com', '2257-7777');



