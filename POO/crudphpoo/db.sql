CREATE DATABASE db_escola;

USE db_escola;

CREATE TABLE tb_alunos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    matricula VARCHAR(20) UNIQUE NOT NULL,
    email VARCHAR(20) UNIQUE NOT NULL,
    status TINYINT NOT NULL,
    genero VARCHAR(20) NOT NULL,
    dataNascimento DATE NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL
);

INSERT INTO tb_alunos(nome,matricula,email, status, genero, dataNascimento, cpf)
VALUES
('maria', '1111111', 'maria@email.com', true, 'feminino', '2005-02-20', '12312312312'),
('luana', '2222222', 'luana@email.com', true, 'feminino', '2004-12-09', '22312312312'),
('erika', '3333333', 'erika@email.com', true, 'feminino', '2003-05-19', '32312312312'),
('leila', '4444444', 'leila@email.com', true, 'feminino', '2000-01-11', '42312312312');

SELECT * FROM tb_alunos;