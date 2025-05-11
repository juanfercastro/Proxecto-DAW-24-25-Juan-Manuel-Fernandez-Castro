--
-- Base de datos: `devlink`
--
CREATE DATABASE IF NOT EXISTS `devlink`;
USE `devlink`;

-- Creación de la tabla Usuario
CREATE TABLE usuarios (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100),
    email VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('developer','empresa','admin');
);

-- Creación de la tabla Portfolio (relación 1:1 con usuario de tipo desarrollador)
CREATE TABLE portfolio (
    id_portfolio INT PRIMARY KEY AUTO_INCREMENT,
    id_desarrollador INT UNIQUE NOT NULL,
    proyectos TEXT,
    tecnologias TEXT,
    sobre_mi TEXT,
    FOREIGN KEY (id_desarrollador) REFERENCES usuario(id_usuario)
);

-- Creación de la tabla Oferta (relación 1:N con usuario de tipo empresa)
CREATE TABLE oferta (
    id_oferta INT PRIMARY KEY AUTO_INCREMENT,
    id_empresa INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    requisitos TEXT NOT NULL,
    ubicacion VARCHAR(100),
    FOREIGN KEY (Id_empresa) REFERENCES usuario(id_usuario)
);

-- Creación de la tabla EntradaForo (relación 1:N con Desarrollador)
CREATE TABLE entradaForo (
    id_entrada INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    contenido TEXT NOT NULL,
    FOREIGN KEY (Id_usuario) REFERENCES usuario(id_usuario)
);