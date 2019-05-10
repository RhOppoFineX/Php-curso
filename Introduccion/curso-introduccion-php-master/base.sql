
Create Database cursophp;

use cursophp

Create table Jobs(
    Id_job INTEGER PRIMARY KEY Auto_increment NOT NULL,
    Tittle VARCHAR(50) NOT NULL,
    `Description` VARCHAR(50) NOT NULL,
    Visible TINYINT(1) NOT NULL,
    Months INTEGER NOT NULL
);

-- PDO (PHP Data Object)
-- Permite estandarizar como trabajar con diferentes sistemas manejadores de bases de datos.

-- ORM (Object Relational Mapping)
-- Permite crear modelos/objetos basados en las tablas que tenemos en nuestra base de datos. 
-- Esto permite que la conexión sea más transparente con MySQL/PostgreSQL. Tiene ya validaciones básicas.

