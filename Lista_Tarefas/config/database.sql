CREATE DATABASE bancoCRM;

USE bancoCRM;

CREATE TABLE login(
    idUsuario INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(15) NOT NULL
);

CREATE TABLE lista_tarefas(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(200) NOT NULL,
    descricao VARCHAR(200) NOT NULL,
    dataCriacao date NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES login(idUsuario)
);

INSERT INTO login(usuario, email, senha)
VALUES
("Enzo", "enzozamineli@gmail.com", "zamineli");

select * from listaTarefas;