DROP DATABASE IF EXISTS db_pdo;

CREATE DATABASE db_pdo;

USE db_pdo;

CREATE TABLE usuarios(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100)
);