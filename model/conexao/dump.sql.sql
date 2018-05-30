    create database espaco;

    use espaco;

    create table usuario (
    id int not null primary key auto_increment,
    nome varchar (50) not null,
    senha varchar (32) not null,
    idade int (2) not null,
    nivel int(1) UNSIGNED NOT NULL DEFAULT '1'
    );

    create table comentario (
    id_comentario int not null primary key auto_increment,
    id_usuario int not null,
    comentario varchar (200) not null
    );

    insert into usuario (nome, senha, idade, nivel) values('admin', md5('123'), '99', 2);
    insert into usuario (nome, senha, idade) values('user', md5('123'), '10');

