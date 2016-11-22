/*
create database cpro;
use cpro
*/
/*
DROP TABLE LENGUAJE;
DROP TABLE TIPO_DESARROLLO;
DROP TABLE BD;
DROP TABLE ANALISIS;
DROP TABLE D_DESARROLLO;

DROP TABLE CUATRIMESTRE;
DROP TABLE GRUPO;
DROP TABLE TURNO;
DROP TABLE D_CU_GR;

DROP TABLE ROL;
DROP TABLE MATERIA;
DROP TABLE ASESOR;
DROP TABLE EQUIPO;
DROP TABLE INTEGRANTE;
DROP TABLE TEMATICA;

DROP TABLE PROYECTO;
DROP TABLE GALERIA;
DROP TABLE EXPROY;
DROP TABLE ANO;
*/
create table ANO
(
	id_ao int(2) not null AUTO_INCREMENT,
	ano int(4) not null,
	primary key(id_ao),
	unique(ano)
);	

create table EXPROY
(
	id_ep int(2) not null AUTO_INCREMENT,
	id_ao int(2) not null,
	logo_ep longblob not null,
	desc_ep varchar(200),
	primary key(id_ep),
	foreign key (id_ao) references ANO(id_ao),
	unique(id_ao)
);

create table GALERIA
(
	id_gl int(3) not null AUTO_INCREMENT,
	id_ep int(2) not null,
	foto_gl longblob not null,
	titulo_gl varchar(20) not null,
	des_gl varchar(50) not null,
	primary key(id_gl),
	foreign key(id_ep) references EXPROY(id_ep)
);

create table ROL
(
	id_rl int(1) not null AUTO_INCREMENT,
	des_rl varchar(20) not null,
	primary key(id_rl)
);

create table ASESOR
(
	id_as int(3) not null AUTO_INCREMENT,
	nombre_as varchar(30) not null,
	apellido_as varchar(30) not null,
	primary key(id_as)
);

create table EQUIPO
(
	id_eq int(3) not null AUTO_INCREMENT,
	id_as int(3) not null,
	nombre_eq varchar(30) not null,
	logo_eq longblob not null,
	primary key(id_eq),
	foreign key(id_as) references ASESOR(id_as),
	unique key(nombre_eq)
);

create table INTEGRANTE
(
	id_in int(4) not null AUTO_INCREMENT,
	id_rl int(1) not null,
	id_eq int(3) not null,
	foto_in longblob not null,
	nombre_in varchar(30) not null,
	apellido_in varchar(30) not null,
	correo_in varchar(50) not null,
	primary key(id_in),
	foreign key(id_rl) references ROL(id_rl),
	foreign key(id_eq) references EQUIPO(id_eq)
);

create table TEMATICA
(
	id_tm int(2) not null AUTO_INCREMENT,
	des_tm varchar(20) not null,
	primary key(id_tm),
	unique key(des_tm)
);

create table PROYECTO
(
	id_pr int(4) not null AUTO_INCREMENT,
	id_tm int(2) not null,
	id_ep int(2) not null,
	id_eq int(3) not null,
	nombre_pr varchar(20) not null,
	logo_pr longblob not null,
	obj_pr varchar(255) not null,
	des_pr varchar(300) not null,
	alcance_pr varchar(255) not null,
	pres_pr int(4) not null,
	dur_pr int(3) not null,
	primary key(id_pr),
	foreign key(id_eq) references EQUIPO(id_eq),
	foreign key(id_tm) references TEMATICA(id_tm),
	foreign key(id_ep) references EXPROY(id_ep),
	unique key(nombre_pr)
);

create table CUATRIMESTRE
(
	id_cu int(1) not null AUTO_INCREMENT,
	cuatri int(1) not null,
	primary key(id_cu),
	unique key(cuatri)
);

create table GRUPO
(
	id_gr int(2) not null AUTO_INCREMENT,
	grupo varchar(15) not null,
	primary key(id_gr)
);

create table TURNO
(
	id_tu int(1) not null AUTO_INCREMENT,
	turno varchar(20) not null,
	primary key(id_tu)
);

create table D_CU_GR
(
	id_pr int(4) not null,
	id_gr int(2) not null,
	id_cu int(1) not null,
	id_tu int(1) not null,
	primary key(id_pr,id_gr,id_cu,id_tu),
	foreign key(id_pr) references PROYECTO(id_pr),
	foreign key(id_gr) references GRUPO(id_gr),
	foreign key(id_cu) references CUATRIMESTRE(id_cu),
	foreign key(id_tu) references TURNO(id_tu)
);

create table ANALISIS
(
	id_an int(2) not null AUTO_INCREMENT,
	nombre_an varchar(30) not null,
	nivel_an int(2) not null,
	primary key(id_an)
);

create table BD
(
	id_bd int(2) not null AUTO_INCREMENT,
	nombre_bd varchar(30) not null,
	nivel_bd int(2) not null,
	primary key(id_bd)
);

create table LENGUAJE
(
	id_lj int(2) not null AUTO_INCREMENT,
	nombre_lj varchar(30) not null,
	nivel_lj int(2) not null,
	primary key(id_lj)
);

create table TIPO_DESARROLLO
(
	id_td int(2) not null AUTO_INCREMENT,
	tipo_td varchar(20) not null,
	nivel_td int(2) not null,
	primary key(id_td)
);

create table D_DESARROLLO
(
	id_pr int(4) not null,
	id_td int(2) not null,
	id_bd int(2) not null,
	id_lj int(2) not null,
	id_an int(2) not null,
	primary key(id_pr,id_td,id_bd,id_lj,id_an),
	foreign key (id_pr) references PROYECTO(id_pr),
	foreign key (id_td) references TIPO_DESARROLLO(id_td),
	foreign key (id_bd) references BD(id_bd),
	foreign key (id_lj) references LENGUAJE(id_lj),
	foreign key (id_an) references ANALISIS(id_an)
);