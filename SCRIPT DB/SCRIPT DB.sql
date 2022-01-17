CREATE DATABASE estudiante;

use estudiante;

CREATE TABLE estudiante
(
codigo VARCHAR(10) PRIMARY KEY,
dni VARCHAR(15) NOT NULL,
nombre VARCHAR(45) NOT NULL,
apellido VARCHAR(45) NOT NULL
);

