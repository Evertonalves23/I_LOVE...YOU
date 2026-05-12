CREATE DATABASE cadastro_app;

USE cadastro_app;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE,
    cpf VARCHAR(20),
    senha VARCHAR(255),
    token VARCHAR(255)
);
