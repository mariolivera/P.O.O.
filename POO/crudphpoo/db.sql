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

CREATE TABLE tb_professor(
    id INT PRIMARY KEY AUTO_INCREMENT,
    endereco VARCHAR(45) NOT NULL,
    formacao VARCHAR(45) NOT NULL,
    status TINYINT NOT NULL,
    nome VARCHAR(50) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL
);

INSERT INTO tb_professor(endereco,formacao, status,nome, cpf)
VALUES
('fortaleza', 'Php', true, 'Alessandro','12312312312'),
('caucaia', 'Margento', true, 'Lorao','22312312312'),
('eusebio', 'Html', true, 'Allan','32312312312'),
('icarai', 'Css', true, 'Diene','42312312312');

SELECT * FROM tb_professor;

CREATE TABLE tb_cursos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    periodo VARCHAR(10) NOT NULL,
    professor VARCHAR(20) NOT NULL,
    laboratorio VARCHAR(20)NOT NULL
);

INSERT INTO tb_cursos(nome,periodo,professor,laboratorio)
VALUES
('fisica','tarde','toin','steve jobs'),
('matematica', 'noite', 'alessandro','steve jobs'),
('biologia', 'manham', 'alana','bill gates' ),
('geografia', 'tarde', 'leila','bill gates');

SELECT * FROM tb_cursos;