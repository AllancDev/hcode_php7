CREATE DATABASE dbphp7;
USE dbphp7;
CREATE TABLE tb_usuarios(
    idusuario INT PRIMARY KEY AUTO_INCREMENT, 
    deslogin VARCHAR(64) NOT NULL, 
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios(deslogin, dessenha) VALUES ("root", "#!*DS");