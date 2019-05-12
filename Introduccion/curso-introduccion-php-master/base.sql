
Create Database cursophp;

use cursophp

Create table Jobs(
    id INTEGER PRIMARY KEY Auto_increment NOT NULL,
    tittle VARCHAR(50) NOT NULL,
    `description` VARCHAR(50) NOT NULL,
    visible TINYINT(1),
    months INTEGER,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);

-- PDO (PHP Data Object)
-- Permite estandarizar como trabajar con diferentes sistemas manejadores de bases de datos.

-- ORM (Object Relational Mapping)
-- Permite crear modelos/objetos basados en las tablas que tenemos en nuestra base de datos. 
-- Esto permite que la conexión sea más transparente con MySQL/PostgreSQL. Tiene ya validaciones básicas.

