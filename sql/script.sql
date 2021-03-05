create database envios;

create table cliente(
    cedula varchar(11),
    nombre varchar(50),
    telefone varchar(50),
    correo varchar(50),
    constraint cedula_pk primary key (cedula)
);