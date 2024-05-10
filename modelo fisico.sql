create database porteiro_inteligente;
use porteiro_inteligente;

create table Clientes(
cliente_id int auto_increment primary key,
nome varchar (200),
cpf char(14),
email varchar(50),
telefone varchar(40)
);

create table pedidos(
id_pedido int auto_increment primary key,
nome varchar(200), -- nome do produto
numero int,
empresa varchar(200),
email varchar(50)
);
-- ,data_entrega date

drop table pedidos;
select * from clientes;
select* from pedidos;
