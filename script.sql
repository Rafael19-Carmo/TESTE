create schema serralheria;
use serralheria;

create table produto(
	id int not null auto_increment,
    nome varchar(100) not null,
    tipo varchar(50) not null, 
    descricao varchar(400) not null, 
    dt_hr datetime not null,
    imagem varchar(200) not null,
    primary key(id)
);
create table orcamento(
	id int not null auto_increment,
	nome varchar(100) not null,
    telefone1 varchar(16) not null,
    whatsapp varchar(16) not null,
    email varchar(50),
    descricao varchar(1000) not null,
    data_hora datetime not null,
    img_exemplo varchar (200),
    tipo int,
    primary key(id)
);
select * from orcamento;
select * from orcamento where nome like 's%';
create table noticia(
	id int not null auto_increment,
    titulo varchar(50) not null,
    link varchar(1000) not null,
    data_hora datetime not null,
    primary key(id)
);
select * from noticia;

select * from orcamento where nome like 't%' and id = 1;

update orcamento set tipo = 1 where id = 1 ;