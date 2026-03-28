CREATE DATABASE COFFEE_SHOPs;
USE COFFEE_SHOPs;

CREATE TABLE PRODUTOS (
id_prod INT AUTO_INCREMENT PRIMARY KEY,
nome_prod VARCHAR(30) NOT NULL,
quantidade_prod INT default 0 NOT NULL,
preco_prod DOUBLE NOT NULL
);


INSERT INTO PRODUTOS(nome_prod, quantidade_prod, preco_prod) values
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
ALTER TABLE PRODUTOS MODIFY preco_prod DECIMAL(10,2) NOT NULL;

SELECT * FROM PRODUTOS;

CREATE TABLE USUARIO (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nome_user VARCHAR(100) NOT NULL,
    email_user VARCHAR(80) NOT NULL,
    senha_user VARCHAR(25) NOT NULL
);

SELECT * FROM USUARIO;