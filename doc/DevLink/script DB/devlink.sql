--
-- Base de datos: `devlink`
--
CREATE DATABASE IF NOT EXISTS `devlink`;
USE `devlink`;

-- Creación de la tabla Usuario
CREATE TABLE usuarios(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100),
    email VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('developer','empresa','admin') DEFAULT 'developer'
);

-- Creación de la tabla Portfolio 
CREATE TABLE portfolios(
    id_portfolio INT PRIMARY KEY AUTO_INCREMENT,
    id_desarrollador INT UNIQUE NOT NULL,
    proyectos TEXT,
    tecnologias TEXT,
    sobre_mi TEXT,
    CONSTRAINT fk_desarrollador FOREIGN KEY (id_desarrollador) REFERENCES usuarios(id_usuario)
);

-- Creación de la tabla Oferta 
CREATE TABLE ofertas(
    id_oferta INT PRIMARY KEY AUTO_INCREMENT,
    id_empresa INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    requisitos TEXT NOT NULL,
    ubicacion VARCHAR(100),
    CONSTRAINT fk_empresa FOREIGN KEY (id_empresa) REFERENCES usuarios(id_usuario)
);

-- Creación de la tabla Entrada
CREATE TABLE entradas(
    id_entrada INT PRIMARY KEY AUTO_INCREMENT,
    id_creador INT NOT NULL,
    titulo varchar(100) NOT NULL,
    contenido text NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_creador FOREIGN KEY (id_creador) REFERENCES usuarios(id_usuario)
);

-- Creación de la tabla comentarios 
CREATE TABLE comentarios(
    id_comentario INT PRIMARY KEY AUTO_INCREMENT,
    id_entrada INT NOT NULL,
    id_usuario INT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    contenido TEXT NOT NULL,
    likes INT DEFAULT 0,
    CONSTRAINT fk_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    CONSTRAINT fk_entrada FOREIGN KEY (id_entrada) REFERENCES entradas(id_entrada)
);