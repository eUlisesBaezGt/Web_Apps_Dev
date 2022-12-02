DROP DATABASE IF EXISTS gimnasio;
CREATE DATABASE gimnasio;
USE gimnasio;

CREATE TABLE IF NOT EXISTS gimnasio
(
    id_gimnasio      INT         NOT NULL AUTO_INCREMENT,
    nombre           VARCHAR(50) NOT NULL,
    apellido         VARCHAR(50) NOT NULL,
    tipo_membresia   VARCHAR(50) NOT NULL,
    monto_depositado FLOAT       NOT NULL,
    PRIMARY KEY (id_gimnasio)
);
