create database MelinaDaversa2;

use MelinaDaversa2;

create table Productos(
id int auto_increment ,
descripcion varchar(50) ,
precio float,
primary key (id));



select * from Productos; 



create table roles(
rol tinyint,
descripcion varchar(20),
primary key(rol));

insert into roles values(1, "admin"), (2,"Empleado"), (3, "cliente");

create table usuario1(
id int auto_increment,
nombre varchar(20),
apellido varchar(20),
usuario varchar(20),
contra varchar(20),
rolUsuario tinyint references roles(rol),
primary key(id));

drop table usuario1;

insert into usuario1(nombre, apellido, usuario, contra, rolUsuario) values
("juan", "perez", "juancito", "juan123", 1),
("lara", "martinez", "larita", "lara123", 2),
("agustina", "lopez", "agus", "agus123", 3);