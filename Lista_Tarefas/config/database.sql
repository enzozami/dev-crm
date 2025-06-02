CREATE DATABASE bancocrm;

USE bancocrm;

CREATE TABLE login(
    idUsuario INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(50) NOT NULL
);

CREATE TABLE lista_tarefas(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(200) NOT NULL,
    descricao VARCHAR(200) NOT NULL,
    dataCriacao date NOT NULL,
    id_usuario INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES login(idUsuario)
);

INSERT INTO login(usuario, email, senha)
VALUES
('Usuário Teste 1', 'usuario1@exemplo.com', 'senha123'),
('Usuário Teste 2', 'usuario2@exemplo.com', 'senha456');