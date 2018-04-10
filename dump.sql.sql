    create database arrayenterprises;

    use arrayenterprises;

    create table usuario (
    id int not null primary key auto_increment,
    nome varchar (50) not null,
    email varchar (100) not null,
    senha varchar (32) not null,
    foto varchar (100) null,
    nivel int(1) UNSIGNED NOT NULL DEFAULT '1'
    );

    create table comentario (
    id_comentario int not null primary key auto_increment,
    id_usuario int not null,
    comentario varchar (200) not null,
    data_inclusao datetime default current_timestamp,
    data_alteracao datetime default current_timestamp
    );

    create table historico (
    id_historico int not null primary key auto_increment,
    id_usuario int not null,
    id_comentario int not null,
    comentario varchar (200) not null,
    data_alteracao datetime default current_timestamp
    );

    insert into usuario (nome, email, senha, nivel) values('admin', 'admin@admin.com', md5('admin'), 2);
    insert into usuario (nome, email, senha, foto) values('user', 'user@user.com', md5('user'), 'user.jpg');
    insert into comentario (id_usuario, comentario, data_inclusao, data_alteracao) values('2', 'Muito bom esse produto', current_timestamp, current_timestamp);
    insert into comentario (id_usuario, comentario, data_inclusao, data_alteracao) values('2', 'Conceito interessante', current_timestamp, current_timestamp);
    insert into comentario (id_usuario, comentario, data_inclusao, data_alteracao) values('2', 'Poderia ser melhor', current_timestamp, current_timestamp);
