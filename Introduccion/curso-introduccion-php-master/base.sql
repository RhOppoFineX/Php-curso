
Create Database cursophp;

use cursophp

Create table Jobs(
    Id_job INTEGER PRIMARY KEY Auto_increment NOT NULL,
    Tittle VARCHAR(50) NOT NULL,
    `Description` VARCHAR(50) NOT NULL,
    Visible TINYINT(1) NOT NULL,
    Months INTEGER NOT NULL
);