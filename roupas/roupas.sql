-- Drop banco de dados
-- drop database banco de dados;

-- Criação do banco de dados
create database roupas;

-- Selecionar banco de dados
use roupas;

-- Criação da tabela usuario
create table roupas (
   id_roupas             int       not null auto_increment,
   nome      varchar(50)   not null,
   tipo   varchar(70)    not null,
   marca   varchar(50)    not null,
   cidade   varchar(50)    not null,
   estado   varchar(02)    not null,
   telefone   varchar(15)    not null,
   email  varchar(70)    not null,
   foto_blob           blob,
   foto_nome           varchar(100),
   dt_cadastro date      not null,
   primary key (id_roupasroupas)

);