CREATE DATABASE IF NOT EXISTS lote;

USE lote;

CREATE TABLE IF NOT EXISTS loteria 
(
    numero1 TINYINT PRIMARY KEY,
    numero2 TINYINT,
    numero3 TINYINT,
    numero4 TINYINT,
    numero5 TINYINT
);

INSERT INTO loteria (numero1, numero2, numero3, numero4, numero5) VALUES ('1','2','0','3','4');
INSERT INTO loteria (numero1, numero2, numero3, numero4, numero5) VALUES ('5','3','1','9','2');
INSERT INTO loteria (numero1, numero2, numero3, numero4, numero5) VALUES ('8','5','0','0','3');
