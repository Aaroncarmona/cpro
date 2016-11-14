/*AÑOS QUE SE HA LLEVADO A CABO LA EXPROY*/
insert into ano(ano) values (2014),(2015),(2016);

/*INFO DE LAS EXPROY REALIZADAS*/
insert into EXPROY(id_ao,logo_ep,desc_ep) values
	(1,123,"Exproy 2014 ven a disfrutar los mejores proyectos de sustentabilidad en mexico"),
	(2,123,"Exproy 2015 ven a disfrutar los mejores proyectos de sustentabilidad en mexico"),
	(3,123,"Exproy 2016 ven a disfrutar los mejores proyectos de sustentabilidad en mexico");
	
/*
TEMATICA
PARA LA CLASIFICACION DE PROYECTOS TIENEN UNA TEMATICA
*/

insert into TEMATICA(des_tm) values
	("Sustentabilidad"),
	("Seguridad"),
	("E-commers"),
	("Deporte"),
	("Educacioneeeee"),
	("Pagos"),
	("Ventas"),
	("Control"),
	("Comunidad");

insert into CUATRIMESTRE(cuatri) values
	(3),(4),(5),(6),(7),(8),(9);

insert into TURNO(turno) values
	("Matutino"),
	("Vespertino");

insert into GRUPO(grupo) values
	("ITIC901"),
	("IC-51"),
	("IC-52");

/*ROLES DE LOS INTEGRANTES*/
insert into ROL(des_rl) values 
	("Lider de proyecto"),
	("Desarrollador"),
	("Analista"),
	("Administrador de la base de datos"),
	("Diseñador");

insert into PROYECTO(id_tm,id_ep,nombre_pr,logo_pr,obj_pr,des_pr,alcance_pr,pres_pr,dur_pr) values
	(
		1,
		3,
		"My Sell",
		123,
		"Gestionar un sistema de ventas para materiales de aceros",
		"Se prentende desarrollar con las mejores tecnologias un sistema para una empresa de acero",
		"El alcance del proyecto sera en Nezahualcoyotl",
		1000,
		300
	),
	(
		2,
		3,
		"Sicautn",
		123,
		"desarrollar un sistema web que permita gestionar el proceso de acceso con vehículos al plantel, agilizar el flujo de vehículos que entran y salen del estacionamiento y resolver los conflictos con el trámite del tarjetón que actualmente expiden para po",
		"desarrollar un sistema web que permita gestionar el proceso de acceso con vehículos al plantel, agilizar el flujo de vehículos que entran y salen del estacionamiento y resolver los conflictos con el trámite del tarjetón que actualmente expiden para po",
		"aplicación web que permite a los usuarios ser parte de una comunidad en la cual pueden publicar sus recetas",
		2000,
		300
	),
	(3,3,"Culinario",123,"aplicación web que permite a los usuarios ser parte de una comunidad en la cual pueden publicar sus recetas","aplicación web que permite a los usuarios ser parte de una comunidad en la cual pueden publicar sus recetas","aplicación web que permite a los usuarios ser parte de una comunidad en la cual pueden publicar sus recetas",3000,400),
	(1,3,"Marappton",123,"un estudiante de secundaria conocerá y hará uso correcto de los conceptos básicos de las matemáticas","un estudiante de secundaria conocerá y hará uso correcto de los conceptos básicos de las matemáticas","un estudiante de secundaria conocerá y hará uso correcto de los conceptos básicos de las matemáticas",2000,200),
	(2,3,"Barbersoft",123,"optimizar el proceso de pago semanal y resguardar un historial de ventas realizadas por los empleados de zona h (salón de belleza & barberia)","optimizar el proceso de pago semanal y resguardar un historial de ventas realizadas por los empleados de zona h (salón de belleza & barberia)","optimizar el proceso de pago semanal y resguardar un historial de ventas realizadas por los empleados de zona h (salón de belleza & barberia)",1000,250),
	(6,3,"La Joya System",123,"ayuda a que la búsqueda de algún equipo o jugador sea más rápida.","ayuda a que la búsqueda de algún equipo o jugador sea más rápida.","ayuda a que la búsqueda de algún equipo o jugador sea más rápida.",500,100),
	(7,3,"My Store",123,"automatización del proceso de ventas en línea y control de inventario de un almacén de joyería y ropa","automatización del proceso de ventas en línea y control de inventario de un almacén de joyería y ropa","automatización del proceso de ventas en línea y control de inventario de un almacén de joyería y ropa",1853,250),
	(2,3,"Hs System",123,"desarrollar una aplicación web y móvil, que permita el control del inventario de los productos de hardware, gestionar las sucursales y usuarios que se encuentran dentro del sistema, registrar las ventas y retroalimentar al administrador con reportes.","desarrollar una aplicación web y móvil, que permita el control del inventario de los productos de hardware, gestionar las sucursales y usuarios que se encuentran dentro del sistema, registrar las ventas y retroalimentar al administrador con reportes.","desarrollar una aplicación web y móvil, que permita el control del inventario de los productos de hardware, gestionar las sucursales y usuarios que se encuentran dentro del sistema, registrar las ventas y retroalimentar al administrador con reportes.",3481,156),
	(3,3,"AlphaGym",123,"desarrollo de aplicación cliente-servidor para la venta y gestion de actividades de un gimnasio.","desarrollo de aplicación cliente-servidor para la venta y gestion de actividades de un gimnasio.","desarrollo de aplicación cliente-servidor para la venta y gestion de actividades de un gimnasio.",3485,354);

insert into D_CU_GR(id_pr,id_gr,id_cu,id_tu) values
	(1,1,1,1),
	(2,1,2,2),
	(3,2,3,1),
	(4,2,4,2);

insert into ASESOR(nombre_as,apellido_as,id_rl) values
	("GILBERTO","PACHECO",2),
	("PEREA","VARGAS",2),
	("LUIS MANUEL","HERNANDEZ",3);

insert into EQUIPO(id_pr,id_as,nombre_eq,logo_eq,lema_eq) values
	(1,1,"Bit Develop",123,"Tu negocio mas facil"),
	(5,1,"Eissi",123,"Lo mas flexible en tu vida"),
	(6,2,"Link Application",123,"A tan solo un link"),
	(2,2,"Hunab Ku",123,"En el momento y como quieras"),
	(4,3,"Igoodbad",123,"Mas que un regalo");


insert into INTEGRANTE(id_rl,id_eq,foto_in,nombre_in,apellido_in,correo_in) values
	(1,1,123,"Aaron Adrian","Carmona Espinosa","carmonespi@gmail.com"),
	(2,1,123,"Luis Antonio","Carmona Espinosa","ferrari2041@hotmail.com"),
	(3,1,123,"Oscar","Alvarez Sanchez","oscaralvarez61@live.com"),
	(4,1,123,"Mario Bernardo","Gonzalez Cruz","bernardo326@hotmail.com"),
	(5,1,123,"Bianca Yamileth","Galindo Jimenez","galindojimenez@hotmail.com");
/*
insert into puntaje(puntaje) values
	(1),(2),(3),(4),(5),(6),(7),(8),(9),(10);

insert into evaluador(nombre_ed,apellido_ed,correo_ed) values
	("Gilberto","Pacheco","gilberto23@gmial.com"),
	("Juan","Mexica","jpag@gmail.com"),
	("Jovan","Del Prado","jovandelprado@hotmail.com"),
	("Julio Cesar","Calva Mendez","julio.cesar@gmail.com"),
	("Pueba","Rivera","pueblarivera@gmial.com");

insert into evaluacion(id_pr,id_ed,id_pt,obser_ec,nota_ec) values
	(1,1,5,"Todo el equipo estuvo muy atento con nosotros","moverse mas, explicar mas claro"),
	(2,1,7,"Tener mas responsabilidad en el trabajo que se entrega final",""),
	(3,2,4,"",""),
	(4,3,7,"",""),
	(5,4,10,"","");
*/
insert into ANALISIS(nombre_an,nivel_an) values
	("RUP",7)
	;

insert into BD(nombre_bd,nivel_bd) values 
	("PROGRESS SQL",5),
	("MYSQL",8),
	("ORACLE XE",8),
	("SQL LITE",10)
	;

insert into TIPO_DESARROLLO(tipo_td,nivel_td) values
	("ESCRITORIO",5),
	("WEB",5),
	("ANDROID",10);

insert into LENGUAJE(nombre_lj,nivel_lj) values
	("PHP",8),
	("JAVA",8),
	("C",8)
	;

insert into D_DESARROLLO(id_pr,id_td,id_bd,id_lj,id_an) values
	(1,1,1,1,1),
	(2,1,1,2,1),
	(3,2,2,3,1),
	(4,3,3,1,1),
	(5,3,4,2,1)
	;
/*GALERIA*/
insert into GALERIA(id_ep,foto_gl,titulo_gl,des_gl) values
	(3,123,"EXPROY 2015","ASDFQERÑLJADSF"),
	(3,123,"EXPROY 2015","ASDFQERÑLJADSF"),
	(3,123,"EXPROY 2015","ASDFQERÑLJADSF"),
	(3,123,"EXPROY 2015","ASDFQERÑLJADSF"),
	(3,123,"EXPROY 2015","ASDFQERÑLJADSF");
