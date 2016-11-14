select * from proyecto


create or replace view v_d_desarrollo as
select d.id_pr,t.tipo_td,a.nombre_an,l.nombre_lj,b.nombre_bd
from lenguaje l, analisis a, tipo_desarrollo t, bd b, d_desarrollo d
where (d.id_lj = l.id_lj and
a.id_an = d.id_an and
d.id_td = t.id_td and
d.id_bd = b.id_bd);

create or replace view v_d_cu_gr as
select d.id_pr,c.cuatri,g.grupo,t.turno
from d_cu_gr d,cuatrimestre c,grupo g,turno t
where ( d.id_gr = g.id_gr and
	d.id_cu = c.id_cu and
	d.id_tu = t.id_tu);

create or replace view v_calificacion as
select d.id_pr,FORMAT(((l.nivel_lj+a.nivel_an+t.nivel_td+b.nivel_bd)/4),1) "Calificacion"
from lenguaje l, analisis a, tipo_desarrollo t, bd b, d_desarrollo d
where (d.id_lj = l.id_lj and
a.id_an = d.id_an and
d.id_td = t.id_td and
d.id_bd = b.id_bd);

create or replace view v_integrante as
select i.id_in,r.des_rl,i.foto_in,i.nombre_in,i.apellido_in,i.correo_in
from rol r, integrante i
where (i.id_rl = r.id_rl);

select *
from integrante;