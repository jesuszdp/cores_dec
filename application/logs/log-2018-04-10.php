<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-10 08:39:39 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 138
ERROR - 2018-04-10 08:58:29 --> Severity: Notice --> Undefined index: tipo /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/grafica.php 7
ERROR - 2018-04-10 08:58:29 --> Severity: Notice --> Undefined index: tipo /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/grafica.php 7
ERROR - 2018-04-10 08:58:29 --> Severity: Notice --> Undefined index: tipo /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/grafica.php 8
ERROR - 2018-04-10 08:58:29 --> Severity: Notice --> Undefined index: tipo /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/grafica.php 8
ERROR - 2018-04-10 09:27:10 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 138
ERROR - 2018-04-10 09:35:57 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 138
ERROR - 2018-04-10 09:40:12 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 09:45:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 09:49:36 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 10:17:32 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 10:19:02 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 10:25:32 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 10:32:53 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."visible", "icon") VALUES ('Por un', '', NULL, 1, '', TRUE, ...
                                                             ^ - Invalid query: INSERT INTO "sistema"."modulos" ("nombre", "url", "id_modulo_padre", "orden", "id_configurador", "visible", "icon") VALUES ('Por un', '', NULL, 1, '', TRUE, 'keyboard_arrow_right')
ERROR - 2018-04-10 10:36:39 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 10:36:42 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 10:36:54 --> Query error: ERROR:  schema "dec" does not exist
LINE 2:                       from dec.h_indicadores HI
                                   ^ - Invalid query: select row_number() over(order by (select 1)) as ranking, PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados
                      from dec.h_indicadores HI
                      left join catalogos.programas_proyecto PP on PP.id_programa_proyecto = HI.id_programa_proyecto
                      left join catalogos.unidades_instituto UI on UI.clave_presupuestal = HI.cve_presupuestal
                      where hi.denominador > 0 and UI.nivel_atencion = 1 or UI.nivel_atencion = 2 and UI.anio = 2017 and HI.anio = 2017
                      group by PP.nombre, HI.id_programa_proyecto
                      order by programados
ERROR - 2018-04-10 10:39:30 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 10:42:18 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 10:49:32 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:49:32 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:49:32 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:49:32 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:49:32 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:49:32 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:49:32 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:49:32 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:50:27 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:50:27 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:50:27 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:50:27 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:50:27 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:50:27 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:50:27 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:50:27 --> Severity: Notice --> Undefined index: ranking /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/tabla.php 17
ERROR - 2018-04-10 10:58:59 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 12:48:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:04:37 --> Severity: error --> Exception: Call to undefined method Ranking_dec_model::ranking_por_umae() /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Ranking_dec_model.php 30
ERROR - 2018-04-10 13:05:32 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:45:58 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:48:17 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:49:03 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:49:11 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:49:12 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:49:24 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:49:33 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:49:34 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:49:38 --> 404 Page Not Found: Dec/index
ERROR - 2018-04-10 13:49:49 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 13:51:46 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 13:51:59 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:56:01 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 13:58:33 --> Severity: Warning --> Illegal string offset 'id_delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:58:33 --> Severity: Warning --> Illegal string offset 'delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:58:33 --> Severity: Notice --> Undefined index: id_delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:58:33 --> Severity: Notice --> Undefined index: delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:58:33 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 13:58:57 --> Severity: Warning --> Illegal string offset 'id_delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:58:57 --> Severity: Warning --> Illegal string offset 'delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:58:57 --> Severity: Notice --> Undefined index: id_delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:58:57 --> Severity: Notice --> Undefined index: delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:58:57 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 13:59:10 --> Severity: Warning --> Illegal string offset 'id_delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:59:10 --> Severity: Warning --> Illegal string offset 'delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:59:10 --> Severity: Notice --> Undefined index: id_delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:59:10 --> Severity: Notice --> Undefined index: delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 13:59:10 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 14:13:12 --> Severity: Warning --> Illegal string offset 'id_delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 14:13:12 --> Severity: Warning --> Illegal string offset 'delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 14:13:12 --> Severity: Notice --> Undefined index: id_delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 14:13:12 --> Severity: Notice --> Undefined index: delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/helpers/general_helper.php 52
ERROR - 2018-04-10 14:13:12 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 317
ERROR - 2018-04-10 14:14:31 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 317
ERROR - 2018-04-10 14:17:28 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 14:17:37 --> Query error: ERROR:  syntax error at or near "php$usuario"
LINE 1: ...lect * from catalogos.regiones where id_region=<$1php$usuari...
                                                             ^ - Invalid query: select * from catalogos.regiones where id_region=<?php$usuario[
ERROR - 2018-04-10 14:17:54 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 14:23:03 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF), expecting ',' or ';' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_unidad.php 18
ERROR - 2018-04-10 14:24:48 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 14:27:20 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-10 14:28:54 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:29:06 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:29:57 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:30:02 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:31:19 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:32:59 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:42:30 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:44:44 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:46:17 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 315
ERROR - 2018-04-10 14:46:26 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 315
ERROR - 2018-04-10 14:46:49 --> Query error: ERROR:  syntax error at or near "php$usuario"
LINE 1: ...lect * from catalogos.regiones where id_region=<$1php$usuari...
                                                             ^ - Invalid query: select * from catalogos.regiones where id_region=<?php$usuario[
ERROR - 2018-04-10 14:50:58 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 315
ERROR - 2018-04-10 14:51:08 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 315
ERROR - 2018-04-10 14:51:14 --> Query error: ERROR:  syntax error at or near "php$usuario"
LINE 1: ...lect * from catalogos.regiones where id_region=<$1php$usuari...
                                                             ^ - Invalid query: select * from catalogos.regiones where id_region=<?php$usuario[
ERROR - 2018-04-10 14:52:44 --> Query error: ERROR:  syntax error at or near "php$usuario"
LINE 1: ...lect * from catalogos.regiones where id_region=<$1php$usuari...
                                                             ^ - Invalid query: select * from catalogos.regiones where id_region=<?php$usuario[
ERROR - 2018-04-10 14:52:53 --> Query error: ERROR:  syntax error at or near "php$usuario"
LINE 1: ...lect * from catalogos.regiones where id_region=<$1php$usuari...
                                                             ^ - Invalid query: select * from catalogos.regiones where id_region=<?php$usuario[
ERROR - 2018-04-10 14:52:55 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:53:39 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                        (select * from catalogos.unidades_instituto UI
                                        where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_delegacion = ) TU
ERROR - 2018-04-10 14:54:23 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:54:32 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:54:41 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                        (select * from catalogos.unidades_instituto UI
                                        where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_delegacion = ) TU
ERROR - 2018-04-10 14:54:45 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:55:10 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:55:16 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                        (select * from catalogos.unidades_instituto UI
                                        where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_delegacion = ) TU
ERROR - 2018-04-10 14:55:20 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:55:36 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:57:19 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:57:27 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                          (select * from catalogos.unidades_instituto UI
                                          where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_tipo_unidad = 2 and UI.id_delegacion = ) TU
ERROR - 2018-04-10 14:57:34 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:58:07 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 14:59:23 --> Query error: ERROR:  column "hoaooa" does not exist
LINE 1: select * from catalogos.regiones where id_region=hoaooa
                                                         ^ - Invalid query: select * from catalogos.regiones where id_region=hoaooa
ERROR - 2018-04-10 15:00:36 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 15:00:38 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 15:00:43 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                          (select * from catalogos.unidades_instituto UI
                                          where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_tipo_unidad = 2 and UI.id_delegacion = ) TU
ERROR - 2018-04-10 15:03:17 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                          (select * from catalogos.unidades_instituto UI
                                          where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_tipo_unidad = 2 and UI.id_delegacion = ) TU
ERROR - 2018-04-10 15:04:40 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                          (select * from catalogos.unidades_instituto UI
                                          where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region =  and UI.id_tipo_unidad = 2 and UI.id_delegacion = ) TU
ERROR - 2018-04-10 15:08:13 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 316
ERROR - 2018-04-10 15:10:38 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 309
ERROR - 2018-04-10 15:10:47 --> Query error: ERROR:  syntax error at or near "php$usuario"
LINE 1: ...lect * from catalogos.regiones where id_region=<$1php$usuari...
                                                             ^ - Invalid query: select * from catalogos.regiones where id_region=<?php$usuario[
ERROR - 2018-04-10 15:10:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 309
ERROR - 2018-04-10 15:11:32 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 309
ERROR - 2018-04-10 15:19:41 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 309
ERROR - 2018-04-10 15:27:19 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 15:27:37 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 306
ERROR - 2018-04-10 15:31:24 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 139
ERROR - 2018-04-10 16:10:00 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 140
ERROR - 2018-04-10 16:10:13 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 306
ERROR - 2018-04-10 16:10:22 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 140
ERROR - 2018-04-10 16:12:12 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 140
ERROR - 2018-04-10 16:13:17 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 140
ERROR - 2018-04-10 16:15:31 --> Query error: ERROR:  column "g" does not exist
LINE 1: ...catalogos.delegaciones where activo = true and id_region = g
                                                                      ^ - Invalid query: select id_delegacion, nombre delegacion from catalogos.delegaciones where activo = true and id_region = g
