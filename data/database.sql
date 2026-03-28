CREATE DATABASE COFFEE_SHOP;
USE COFFEE_SHOP;

CREATE TABLE PRODUTOS (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(30) NOT NULL,
quantidade INT default 0 NOT NULL,
preco DOUBLE NOT NULL
);


INSERT INTO PRODUTOS(nome, quantidade, preco) values
('Cappuccino_com_Canela', 50, 25.85),
('Cafe_Americano', 100, 20.99),
('Cha_Gelado_Limao', 44, 35.99),
('Cafe_com_Leite', 93, 18.80),
('Cafe_latte', 36, 24.90),
('Chocolate_Quente', 67, 14.90),
('Achocolatado_com_Amendoa', 41, 28.90),
('Chocolate_com_Caramelo', 76, 24.90),
('Achocolatado_com_Canela', 56, 15.90),
('Cafe_Frappe', 43, 14.90),
('Pao_de_Queijo', 183, 4.90),
('Pao_na_Chapa', 144, 12.90);
ALTER TABLE PRODUTOS MODIFY preco DECIMAL(10,2) NOT NULL;

SELECT * FROM PRODUTOS;

CREATE TABLE USUARIO (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(80) NOT NULL,
senha VARCHAR(25) NOT NULL
);

SELECT * FROM USUARIO;