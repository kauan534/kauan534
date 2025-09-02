CREATE DATABASE Mundo_dos_Focinhos;

USE Mundo_dos_Focinhos;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomeDono VARCHAR(100) NOT NULL,
    nomePet VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    dataConsulta DATE NOT NULL,
    horaConsulta TIME NOT NULL,
    tipoServico VARCHAR(50) NOT NULL,
    observacoes TEXT
);

-- Inserir usuário de teste
INSERT INTO usuarios (login, senha) VALUES ('kauan', '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
