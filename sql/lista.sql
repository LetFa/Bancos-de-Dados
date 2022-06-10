-- Drop banco de dados
-- drop database material escolar;

-- Criação do banco de dados
create database lista;

-- Selecionar banco de dados
use lista;

-- Criação da tabela usuario
create table lista (
   id_lista             int       not null auto_increment,
   nome      varchar(50)   not null,
   material   varchar(70)    not null,
   marca   varchar(50)    not null,
   cidade   varchar(50)    not null,
   estado   varchar(02)    not null,
   telefone   varchar(15)    not null,
   email  varchar(70)    not null,
   foto_blob           blob,
   foto_nome           varchar(100),
   dt_cadastro date      not null,
   primary key (id_lista)

);