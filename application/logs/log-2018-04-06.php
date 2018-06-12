<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-06 08:35:57 --> Could not find the language line "index"
ERROR - 2018-04-06 08:36:07 --> Could not find the language line "index"
ERROR - 2018-04-06 08:37:33 --> Could not find the language line "index"
ERROR - 2018-04-06 08:38:10 --> Could not find the language line "index"
ERROR - 2018-04-06 08:38:10 --> Severity: Notice --> Undefined variable: delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 9
ERROR - 2018-04-06 08:38:10 --> Severity: Notice --> Undefined variable: delegacion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 29
ERROR - 2018-04-06 08:38:10 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 08:39:28 --> Could not find the language line "index"
ERROR - 2018-04-06 08:39:29 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 08:39:57 --> Could not find the language line "index"
ERROR - 2018-04-06 08:39:57 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 08:40:12 --> Could not find the language line "index"
ERROR - 2018-04-06 08:40:12 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 08:40:30 --> Could not find the language line "index"
ERROR - 2018-04-06 08:40:30 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 08:43:52 --> Could not find the language line "index"
ERROR - 2018-04-06 08:43:52 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 51
ERROR - 2018-04-06 08:44:09 --> Could not find the language line "index"
ERROR - 2018-04-06 08:44:09 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 51
ERROR - 2018-04-06 08:44:11 --> Could not find the language line "index"
ERROR - 2018-04-06 08:44:11 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 51
ERROR - 2018-04-06 08:45:19 --> Could not find the language line "index"
ERROR - 2018-04-06 08:45:57 --> Could not find the language line "index"
ERROR - 2018-04-06 08:48:12 --> Could not find the language line "index"
ERROR - 2018-04-06 08:48:20 --> Could not find the language line "index"
ERROR - 2018-04-06 08:49:08 --> Could not find the language line "index"
ERROR - 2018-04-06 08:50:35 --> Could not find the language line "index"
ERROR - 2018-04-06 08:50:35 --> Severity: Notice --> Undefined variable: estados /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 636
ERROR - 2018-04-06 08:51:07 --> Could not find the language line "index"
ERROR - 2018-04-06 08:52:22 --> Could not find the language line "index"
ERROR - 2018-04-06 08:55:21 --> Could not find the language line "index"
ERROR - 2018-04-06 08:56:00 --> Could not find the language line "index"
ERROR - 2018-04-06 08:56:15 --> Could not find the language line "index"
ERROR - 2018-04-06 08:57:21 --> Could not find the language line "index"
ERROR - 2018-04-06 08:59:13 --> Could not find the language line "index"
ERROR - 2018-04-06 08:59:42 --> Could not find the language line "index"
ERROR - 2018-04-06 09:07:54 --> Could not find the language line "index"
ERROR - 2018-04-06 09:08:01 --> Could not find the language line "index"
ERROR - 2018-04-06 09:28:56 --> Could not find the language line "index"
ERROR - 2018-04-06 09:29:04 --> Could not find the language line "index"
ERROR - 2018-04-06 09:29:09 --> Could not find the language line "index"
ERROR - 2018-04-06 09:29:52 --> Could not find the language line "index"
ERROR - 2018-04-06 09:30:36 --> Could not find the language line "index"
ERROR - 2018-04-06 09:35:14 --> Could not find the language line "index"
ERROR - 2018-04-06 09:35:24 --> Could not find the language line "index"
ERROR - 2018-04-06 09:35:40 --> Could not find the language line "index"
ERROR - 2018-04-06 09:37:17 --> Could not find the language line "index"
ERROR - 2018-04-06 09:37:49 --> Could not find the language line "index"
ERROR - 2018-04-06 09:40:55 --> Could not find the language line "index"
ERROR - 2018-04-06 09:42:55 --> Could not find the language line "index"
ERROR - 2018-04-06 09:43:15 --> Could not find the language line "index"
ERROR - 2018-04-06 09:43:28 --> Could not find the language line "index"
ERROR - 2018-04-06 09:43:28 --> Query error: ERROR:  column "delegacion" does not exist
LINE 8:                         group by delegacion
                                         ^ - Invalid query: select count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                        inner join (select I.cve_unidad, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                        group by cve_unidad,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                        inner join catalogos.regiones R on R.id_region = D.id_region
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = 22
                        group by delegacion
ERROR - 2018-04-06 09:43:35 --> Could not find the language line "index"
ERROR - 2018-04-06 09:44:53 --> Could not find the language line "index"
ERROR - 2018-04-06 09:45:01 --> Could not find the language line "index"
ERROR - 2018-04-06 09:45:09 --> Could not find the language line "index"
ERROR - 2018-04-06 09:45:29 --> Could not find the language line "index"
ERROR - 2018-04-06 09:47:57 --> Could not find the language line "index"
ERROR - 2018-04-06 09:48:01 --> Could not find the language line "index"
ERROR - 2018-04-06 09:48:05 --> Could not find the language line "index"
ERROR - 2018-04-06 09:48:05 --> Query error: ERROR:  column "delegacion" does not exist
LINE 8:                         group by delegacion
                                         ^ - Invalid query: select count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                        inner join (select I.cve_unidad, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                        group by cve_unidad,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                        inner join catalogos.regiones R on R.id_region = D.id_region
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = 37
                        group by delegacion
ERROR - 2018-04-06 09:48:13 --> Could not find the language line "index"
ERROR - 2018-04-06 09:48:22 --> Could not find the language line "index"
ERROR - 2018-04-06 09:49:12 --> Could not find the language line "index"
ERROR - 2018-04-06 10:07:29 --> Could not find the language line "index"
ERROR - 2018-04-06 10:28:11 --> Could not find the language line "index"
ERROR - 2018-04-06 10:28:34 --> Could not find the language line "index"
ERROR - 2018-04-06 10:28:46 --> Could not find the language line "index"
ERROR - 2018-04-06 10:29:16 --> Could not find the language line "index"
ERROR - 2018-04-06 11:52:50 --> Could not find the language line "index"
ERROR - 2018-04-06 11:53:10 --> Could not find the language line "index"
ERROR - 2018-04-06 12:17:24 --> Could not find the language line "index"
ERROR - 2018-04-06 12:17:29 --> Could not find the language line "index"
ERROR - 2018-04-06 12:17:29 --> Query error: ERROR:  column "delegacion" does not exist
LINE 8:                         group by delegacion
                                         ^ - Invalid query: select count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                        inner join (select I.cve_unidad, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                        group by cve_unidad,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                        inner join catalogos.regiones R on R.id_region = D.id_region
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = 29
                        group by delegacion
ERROR - 2018-04-06 12:18:58 --> Could not find the language line "index"
ERROR - 2018-04-06 12:24:30 --> Could not find the language line "index"
ERROR - 2018-04-06 12:24:35 --> Could not find the language line "index"
ERROR - 2018-04-06 12:24:35 --> Query error: ERROR:  column "delegacion" does not exist
LINE 8:                         group by delegacion
                                         ^ - Invalid query: select count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                        inner join (select I.cve_unidad, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                        group by cve_unidad,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                        inner join catalogos.regiones R on R.id_region = D.id_region
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = 22
                        group by delegacion
ERROR - 2018-04-06 12:24:41 --> Could not find the language line "index"
ERROR - 2018-04-06 12:25:55 --> Could not find the language line "index"
ERROR - 2018-04-06 12:26:00 --> Could not find the language line "index"
ERROR - 2018-04-06 12:26:00 --> Query error: ERROR:  column "delegacion" does not exist
LINE 8:                         group by delegacion
                                         ^ - Invalid query: select count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                        inner join (select I.cve_unidad, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                        group by cve_unidad,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                        inner join catalogos.regiones R on R.id_region = D.id_region
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = 22
                        group by delegacion
ERROR - 2018-04-06 12:26:46 --> Could not find the language line "index"
ERROR - 2018-04-06 12:26:48 --> Could not find the language line "index"
ERROR - 2018-04-06 12:26:53 --> Could not find the language line "index"
ERROR - 2018-04-06 12:26:53 --> Query error: ERROR:  column "delegacion" does not exist
LINE 8:                         group by delegacion
                                         ^ - Invalid query: select count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                        inner join (select I.cve_unidad, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                        group by cve_unidad,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                        inner join catalogos.regiones R on R.id_region = D.id_region
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = 22
                        group by delegacion
ERROR - 2018-04-06 12:26:56 --> Could not find the language line "index"
ERROR - 2018-04-06 12:27:24 --> Could not find the language line "index"
ERROR - 2018-04-06 12:27:28 --> Could not find the language line "index"
ERROR - 2018-04-06 12:27:55 --> Could not find the language line "index"
ERROR - 2018-04-06 12:47:32 --> Could not find the language line "index"
ERROR - 2018-04-06 13:19:47 --> Could not find the language line "index"
ERROR - 2018-04-06 13:19:53 --> Could not find the language line "index"
ERROR - 2018-04-06 13:22:24 --> Could not find the language line "index"
ERROR - 2018-04-06 13:22:24 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 210
ERROR - 2018-04-06 13:22:24 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_unidad.php 77
ERROR - 2018-04-06 13:22:50 --> Could not find the language line "index"
ERROR - 2018-04-06 13:22:50 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 210
ERROR - 2018-04-06 13:22:51 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_unidad.php 77
ERROR - 2018-04-06 13:23:14 --> Could not find the language line "index"
ERROR - 2018-04-06 13:23:14 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 210
ERROR - 2018-04-06 13:23:14 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_unidad.php 77
ERROR - 2018-04-06 13:23:32 --> Could not find the language line "index"
ERROR - 2018-04-06 13:23:32 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 210
ERROR - 2018-04-06 13:23:32 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_unidad.php 77
ERROR - 2018-04-06 13:24:14 --> Could not find the language line "index"
ERROR - 2018-04-06 13:28:20 --> Could not find the language line "index"
ERROR - 2018-04-06 13:31:43 --> Could not find the language line "index"
ERROR - 2018-04-06 13:32:02 --> Could not find the language line "index"
ERROR - 2018-04-06 13:32:10 --> Could not find the language line "index"
ERROR - 2018-04-06 13:33:31 --> Could not find the language line "index"
ERROR - 2018-04-06 13:33:31 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...s.delegaciones where activo = true and id_region = undefined
                                                              ^ - Invalid query: select id_delegacion, nombre delegacion from catalogos.delegaciones where activo = true and id_region = undefined
ERROR - 2018-04-06 13:34:09 --> Could not find the language line "index"
ERROR - 2018-04-06 13:34:11 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...s.delegaciones where activo = true and id_region = undefined
                                                              ^ - Invalid query: select id_delegacion, nombre delegacion from catalogos.delegaciones where activo = true and id_region = undefined
ERROR - 2018-04-06 13:34:58 --> Could not find the language line "index"
ERROR - 2018-04-06 13:34:59 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...s.delegaciones where activo = true and id_region = undefined
                                                              ^ - Invalid query: select id_delegacion, nombre delegacion from catalogos.delegaciones where activo = true and id_region = undefined
ERROR - 2018-04-06 13:35:15 --> Could not find the language line "index"
ERROR - 2018-04-06 13:35:17 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...s.delegaciones where activo = true and id_region = undefined
                                                              ^ - Invalid query: select id_delegacion, nombre delegacion from catalogos.delegaciones where activo = true and id_region = undefined
ERROR - 2018-04-06 13:35:47 --> Could not find the language line "index"
ERROR - 2018-04-06 13:36:09 --> Could not find the language line "index"
ERROR - 2018-04-06 13:36:10 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...s.delegaciones where activo = true and id_region = undefined
                                                              ^ - Invalid query: select id_delegacion, nombre delegacion from catalogos.delegaciones where activo = true and id_region = undefined
ERROR - 2018-04-06 13:36:30 --> Could not find the language line "index"
ERROR - 2018-04-06 13:36:31 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...s.delegaciones where activo = true and id_region = undefined
                                                              ^ - Invalid query: select id_delegacion, nombre delegacion from catalogos.delegaciones where activo = true and id_region = undefined
ERROR - 2018-04-06 13:37:48 --> Could not find the language line "index"
ERROR - 2018-04-06 13:41:58 --> Could not find the language line "index"
ERROR - 2018-04-06 13:45:07 --> Could not find the language line "index"
ERROR - 2018-04-06 13:49:26 --> Could not find the language line "index"
ERROR - 2018-04-06 13:50:44 --> Could not find the language line "index"
ERROR - 2018-04-06 13:53:39 --> Could not find the language line "index"
ERROR - 2018-04-06 13:59:23 --> Could not find the language line "index"
ERROR - 2018-04-06 13:59:56 --> Could not find the language line "index"
ERROR - 2018-04-06 14:04:31 --> Could not find the language line "index"
ERROR - 2018-04-06 14:04:45 --> Could not find the language line "index"
ERROR - 2018-04-06 14:05:02 --> Could not find the language line "index"
ERROR - 2018-04-06 14:05:36 --> Could not find the language line "index"
ERROR - 2018-04-06 14:05:53 --> Could not find the language line "index"
ERROR - 2018-04-06 14:09:35 --> Could not find the language line "index"
ERROR - 2018-04-06 14:09:52 --> Could not find the language line "index"
ERROR - 2018-04-06 14:10:26 --> Could not find the language line "index"
ERROR - 2018-04-06 14:11:17 --> Could not find the language line "index"
ERROR - 2018-04-06 14:11:34 --> Could not find the language line "index"
ERROR - 2018-04-06 14:11:48 --> Could not find the language line "index"
ERROR - 2018-04-06 14:12:53 --> Could not find the language line "index"
ERROR - 2018-04-06 14:13:08 --> Could not find the language line "index"
ERROR - 2018-04-06 14:14:11 --> Could not find the language line "index"
ERROR - 2018-04-06 14:14:26 --> Could not find the language line "index"
ERROR - 2018-04-06 14:17:37 --> Could not find the language line "index"
ERROR - 2018-04-06 14:17:51 --> Could not find the language line "index"
ERROR - 2018-04-06 14:18:30 --> Could not find the language line "index"
ERROR - 2018-04-06 14:18:48 --> Could not find the language line "index"
ERROR - 2018-04-06 14:21:59 --> Could not find the language line "index"
ERROR - 2018-04-06 14:25:08 --> Could not find the language line "index"
ERROR - 2018-04-06 15:26:33 --> Could not find the language line "index"
ERROR - 2018-04-06 15:27:20 --> Could not find the language line "index"
ERROR - 2018-04-06 15:27:48 --> Could not find the language line "index"
ERROR - 2018-04-06 15:28:06 --> Could not find the language line "index"
ERROR - 2018-04-06 15:28:17 --> Could not find the language line "index"
ERROR - 2018-04-06 15:30:24 --> Could not find the language line "index"
ERROR - 2018-04-06 17:19:03 --> Could not find the language line "index"
ERROR - 2018-04-06 17:19:03 --> Query error: ERROR:  column i.cve_unidad does not exist
LINE 2: ...                               inner join (select I.cve_unid...
                                                             ^ - Invalid query: select D.nombre delegacion, count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                                        inner join (select I.cve_unidad, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                                        group by cve_unidad,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                                        inner join catalogos.regiones R on R.id_region = D.id_region
                                        where UI.anio = 2017 and UI.nivel_atencion = 2 and R.id_region = 1 and D.id_delegacion = 7
                                        group by delegacion
ERROR - 2018-04-06 17:20:24 --> Could not find the language line "index"
ERROR - 2018-04-06 17:20:24 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 17:20:35 --> Could not find the language line "index"
ERROR - 2018-04-06 17:20:35 --> Query error: ERROR:  column i.cve_unidad does not exist
LINE 2: ...                               inner join (select I.cve_unid...
                                                             ^ - Invalid query: select D.nombre delegacion, count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                                        inner join (select I.cve_unidad, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                                        group by cve_unidad,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                                        inner join catalogos.regiones R on R.id_region = D.id_region
                                        where UI.anio = 2017 and UI.nivel_atencion = 1 and R.id_region = 1 and D.id_delegacion = 2
                                        group by delegacion
ERROR - 2018-04-06 17:22:40 --> Could not find the language line "index"
ERROR - 2018-04-06 17:22:40 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 17:22:51 --> Could not find the language line "index"
ERROR - 2018-04-06 17:22:51 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 17:23:00 --> Could not find the language line "index"
ERROR - 2018-04-06 17:23:00 --> Query error: ERROR:  column i.clave_presupuestal does not exist
LINE 2: ...                               inner join (select I.clave_pr...
                                                             ^ - Invalid query: select D.nombre delegacion, count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                                        inner join (select I.clave_presupuestal, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                                        group by clave_presupuestal,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                                        inner join catalogos.regiones R on R.id_region = D.id_region
                                        where UI.anio = 2017 and UI.nivel_atencion = 1 and R.id_region = 1 and D.id_delegacion = 7
                                        group by delegacion
ERROR - 2018-04-06 17:25:34 --> Could not find the language line "index"
ERROR - 2018-04-06 17:25:34 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 17:25:46 --> Could not find the language line "index"
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined index: round /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined variable: datos_totales_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 303
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined variable: datos_totales_unidades_con_programa /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-06 17:25:46 --> Severity: Notice --> Undefined variable: datos_totales_porcentaje /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 325
ERROR - 2018-04-06 17:27:40 --> Could not find the language line "index"
ERROR - 2018-04-06 17:27:40 --> Severity: Notice --> Undefined variable: datos_totales_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 303
ERROR - 2018-04-06 17:27:40 --> Severity: Notice --> Undefined variable: datos_totales_unidades_con_programa /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-06 17:27:40 --> Severity: Notice --> Undefined variable: datos_totales_porcentaje /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 325
ERROR - 2018-04-06 17:41:06 --> Could not find the language line "index"
ERROR - 2018-04-06 17:41:06 --> Query error: ERROR:  column i.clave_presupuestal does not exist
LINE 2: ...                               inner join (select I.clave_pr...
                                                             ^ - Invalid query: select D.nombre delegacion, count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                                        inner join (select I.clave_presupuestal, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                                        group by clave_presupuestal,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                                        inner join catalogos.regiones R on R.id_region = D.id_region
                                        where UI.anio = 2017 and UI.nivel_atencion = 1 and R.id_region = 1 and D.id_delegacion = 7
                                        group by delegacion
ERROR - 2018-04-06 17:49:11 --> Could not find the language line "index"
ERROR - 2018-04-06 17:49:11 --> Query error: ERROR:  column i.clave_presupuestal does not exist
LINE 2: ...                               inner join (select I.clave_pr...
                                                             ^ - Invalid query: select D.nombre delegacion, count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                                        inner join (select I.clave_presupuestal, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                                        group by clave_presupuestal,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                                        inner join catalogos.regiones R on R.id_region = D.id_region
                                        where UI.anio = 2017 and UI.nivel_atencion = 1 and R.id_region = 1 and D.id_delegacion = 7
                                        group by delegacion
ERROR - 2018-04-06 17:49:15 --> Could not find the language line "index"
ERROR - 2018-04-06 17:49:15 --> Query error: ERROR:  column i.clave_presupuestal does not exist
LINE 2: ...                               inner join (select I.clave_pr...
                                                             ^ - Invalid query: select D.nombre delegacion, count(UI.nombre) total_unidades from catalogos.programas_proyecto PP
                                        inner join (select I.clave_presupuestal, I.id_programa_proyecto, sum(numerador) numerador, sum(denominador) denominador, sum(porcentaje_aprobados) porcentaje from dec.h_indicadores I
                                        group by clave_presupuestal,id_programa_proyecto) H on H.id_programa_proyecto = PP.id_programa_proyecto
                                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = H.cve_unidad
                                        inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                                        inner join catalogos.regiones R on R.id_region = D.id_region
                                        where UI.anio = 2017 and UI.nivel_atencion = 1 and R.id_region = 1 and D.id_delegacion = 7
                                        group by delegacion
ERROR - 2018-04-06 17:53:40 --> Could not find the language line "index"
ERROR - 2018-04-06 17:53:40 --> Severity: Notice --> Undefined index: nivel_atencion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 365
ERROR - 2018-04-06 17:53:40 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...    where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                        (select * from catalogos.unidades_instituto UI
                                        where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_region = 1 and UI.id_delegacion = 7) TU
ERROR - 2018-04-06 17:54:42 --> Could not find the language line "index"
ERROR - 2018-04-06 17:54:42 --> Severity: Notice --> Undefined index: nivel_atencion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 366
ERROR - 2018-04-06 17:54:42 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...    where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_...
                                                             ^ - Invalid query: select count(TU) total_unidades from
                                        (select * from catalogos.unidades_instituto UI
                                        where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_region = 1 and UI.id_delegacion = 7) TU
ERROR - 2018-04-06 17:55:36 --> Could not find the language line "index"
ERROR - 2018-04-06 17:55:36 --> Severity: Notice --> Undefined variable: datos_totales_unidades_con_programa /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-06 17:55:36 --> Severity: Notice --> Undefined variable: datos_totales_porcentaje /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 325
ERROR - 2018-04-06 18:10:48 --> Could not find the language line "index"
ERROR - 2018-04-06 18:10:48 --> Severity: Notice --> Undefined index: nivel_atencion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 589
ERROR - 2018-04-06 18:10:48 --> Query error: ERROR:  syntax error at or near "and"
LINE 10: ...    where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_...
                                                              ^ - Invalid query: select count(IPT) from (select D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, pp.descripcion,
                                        	sum(hi.numerador) as numerador,
                                        	sum(hi.denominador) as denominador,
                                        round((sum(hi.numerador::numeric) / nullif(sum(hi.denominador::numeric),0))*100,2) porcentaje
                                        from catalogos.unidades_instituto UI
                                        	inner join catalogos.delegaciones D on D.id_delegacion = UI.id_delegacion
                                        	inner join catalogos.regiones R on R.id_region = D.id_region
                                        	left join dec.h_indicadores hi ON(hi.cve_presupuestal = UI.clave_presupuestal)
                                        	left join catalogos.programas_proyecto pp ON(pp.id_programa_proyecto = hi.id_programa_proyecto)
                                        where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_region = 1 and UI.id_delegacion = 7
                                        group by D.clave_delegacional, D.nombre , UI.nombre , pp.descripcion
                                        order by 1,2,3,4) IPT
                                        where IPT.numerador > 0
ERROR - 2018-04-06 18:11:32 --> Could not find the language line "index"
ERROR - 2018-04-06 18:11:32 --> Severity: Notice --> Undefined index: total_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-06 18:11:32 --> Severity: Notice --> Undefined variable: datos_totales_porcentaje /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 325
ERROR - 2018-04-06 18:12:18 --> Could not find the language line "index"
ERROR - 2018-04-06 18:12:18 --> Severity: Notice --> Undefined variable: datos_totales_porcentaje /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 325
ERROR - 2018-04-06 18:13:01 --> Could not find the language line "index"
ERROR - 2018-04-06 18:13:35 --> Could not find the language line "index"
ERROR - 2018-04-06 18:13:47 --> Could not find the language line "index"
ERROR - 2018-04-06 18:14:06 --> Could not find the language line "index"
ERROR - 2018-04-06 18:14:06 --> Severity: Notice --> Undefined index: nivel_atencion /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 304
ERROR - 2018-04-06 18:14:06 --> Query error: ERROR:  syntax error at or near ")"
LINE 3: ...           where UI.anio = 2017 and UI.nivel_atencion = ) TU
                                                                   ^ - Invalid query: select count(TU) total_unidades from
                        (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = ) TU
ERROR - 2018-04-06 18:15:02 --> Could not find the language line "index"
ERROR - 2018-04-06 18:16:16 --> Could not find the language line "index"
ERROR - 2018-04-06 18:16:44 --> Could not find the language line "index"
ERROR - 2018-04-06 18:16:44 --> Severity: error --> Exception: syntax error, unexpected '" %"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 18:16:59 --> Could not find the language line "index"
ERROR - 2018-04-06 18:16:59 --> Severity: error --> Exception: syntax error, unexpected '.' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 40
ERROR - 2018-04-06 18:17:05 --> Could not find the language line "index"
ERROR - 2018-04-06 18:17:40 --> Could not find the language line "index"
ERROR - 2018-04-06 18:17:40 --> Severity: Notice --> Undefined index: programa_educativo /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 37
ERROR - 2018-04-06 18:18:40 --> Could not find the language line "index"
ERROR - 2018-04-06 18:18:40 --> Severity: Notice --> Undefined index: programa_educativo /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 37
ERROR - 2018-04-06 18:23:23 --> Could not find the language line "index"
ERROR - 2018-04-06 18:24:14 --> Could not find the language line "index"
ERROR - 2018-04-06 18:24:25 --> Could not find the language line "index"
ERROR - 2018-04-06 18:25:45 --> Could not find the language line "index"
ERROR - 2018-04-06 18:30:42 --> Could not find the language line "index"
ERROR - 2018-04-06 18:30:42 --> Query error: ERROR:  syntax error at end of input
LINE 2: ...              where UI.anio = 2017 and UI.nivel_atencion = 3
                                                                       ^ - Invalid query: select count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3
ERROR - 2018-04-06 18:31:36 --> Could not find the language line "index"
ERROR - 2018-04-06 18:31:36 --> Query error: ERROR:  column hi.cve_unidad does not exist
LINE 2: ....unidades_instituto UI on UI.clave_presupuestal = HI.cve_uni...
                                                             ^ - Invalid query: select count(T.unidad) total_unidades from (select HI.id_programa_proyecto, UI.nombre unidad, HI.cve_unidad clave_unidad, sum(HI.numerador) numerador, sum(HI.denominador) denominador from dec.h_indicadores HI
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = HI.cve_unidad
                        where UI.nivel_atencion = 3 and UI.anio = 2017
                        group by HI.cve_unidad, UI.nombre, HI.id_programa_proyecto) T
                        where numerador > 0;
ERROR - 2018-04-06 18:33:53 --> Could not find the language line "index"
ERROR - 2018-04-06 18:33:53 --> Query error: ERROR:  column hi.cve_unidad does not exist
LINE 1: ...select HI.id_programa_proyecto, UI.nombre unidad, HI.cve_uni...
                                                             ^ - Invalid query: select count(T.unidad) total_unidades from (select HI.id_programa_proyecto, UI.nombre unidad, HI.cve_unidad clave_unidad, sum(HI.numerador) numerador, sum(HI.denominador) denominador from dec.h_indicadores HI
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = HI.cve_presupuestal
                        where UI.nivel_atencion = 3 and UI.anio = 2017
                        group by HI.cve_presupuestal, UI.nombre, HI.id_programa_proyecto) T
                        where numerador > 0;
ERROR - 2018-04-06 18:34:33 --> Could not find the language line "index"
ERROR - 2018-04-06 18:34:33 --> Severity: Notice --> Undefined index: programa_educativo /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 37
ERROR - 2018-04-06 18:34:33 --> Severity: Notice --> Undefined index: programa_educativo /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/tabla.php 37
ERROR - 2018-04-06 18:36:01 --> Could not find the language line "index"
ERROR - 2018-04-06 18:36:18 --> Could not find the language line "index"
ERROR - 2018-04-06 18:37:09 --> Could not find the language line "index"
ERROR - 2018-04-06 18:37:09 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 18:37:20 --> Could not find the language line "index"
ERROR - 2018-04-06 18:37:45 --> Could not find the language line "index"
ERROR - 2018-04-06 18:38:09 --> Could not find the language line "index"
ERROR - 2018-04-06 19:18:54 --> Could not find the language line "index"
ERROR - 2018-04-06 19:18:54 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 19:19:07 --> Could not find the language line "index"
ERROR - 2018-04-06 19:19:22 --> Could not find the language line "index"
ERROR - 2018-04-06 19:19:26 --> Could not find the language line "index"
ERROR - 2018-04-06 19:21:41 --> Could not find the language line "index"
ERROR - 2018-04-06 19:22:15 --> Could not find the language line "index"
ERROR - 2018-04-06 19:22:15 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 19:22:24 --> Could not find the language line "index"
ERROR - 2018-04-06 19:33:38 --> Could not find the language line "index"
ERROR - 2018-04-06 19:41:03 --> Could not find the language line "index"
ERROR - 2018-04-06 19:42:46 --> Could not find the language line "index"
ERROR - 2018-04-06 19:42:58 --> Could not find the language line "index"
ERROR - 2018-04-06 19:44:13 --> Could not find the language line "index"
ERROR - 2018-04-06 19:44:18 --> Could not find the language line "index"
ERROR - 2018-04-06 19:45:39 --> Could not find the language line "index"
ERROR - 2018-04-06 19:48:28 --> Could not find the language line "index"
ERROR - 2018-04-06 19:48:28 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 20:39:52 --> Could not find the language line "index"
ERROR - 2018-04-06 20:39:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 20:40:09 --> Could not find the language line "index"
ERROR - 2018-04-06 20:40:09 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 20:40:17 --> Could not find the language line "index"
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:40:17 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:40:39 --> Could not find the language line "index"
ERROR - 2018-04-06 20:40:39 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 20:40:44 --> Could not find the language line "index"
ERROR - 2018-04-06 20:40:44 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 20:41:39 --> Could not find the language line "index"
ERROR - 2018-04-06 20:41:39 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 20:43:25 --> Could not find the language line "index"
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:43:25 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:43:55 --> Could not find the language line "index"
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 197
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 203
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:43:55 --> Severity: Notice --> Undefined variable: grupo_actual /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 212
ERROR - 2018-04-06 20:44:08 --> Could not find the language line "index"
ERROR - 2018-04-06 20:44:22 --> Could not find the language line "index"
ERROR - 2018-04-06 20:45:01 --> Could not find the language line "index"
ERROR - 2018-04-06 20:45:33 --> Could not find the language line "index"
ERROR - 2018-04-06 20:59:02 --> Could not find the language line "index"
ERROR - 2018-04-06 20:59:02 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 368
ERROR - 2018-04-06 21:05:18 --> Could not find the language line "index"
ERROR - 2018-04-06 21:05:18 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-06 21:05:32 --> Could not find the language line "index"
ERROR - 2018-04-06 21:05:32 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-06 21:05:34 --> Could not find the language line "index"
ERROR - 2018-04-06 21:05:34 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
ERROR - 2018-04-06 21:05:39 --> Could not find the language line "index"
ERROR - 2018-04-06 21:06:06 --> Could not find the language line "index"
ERROR - 2018-04-06 21:06:49 --> Could not find the language line "index"
ERROR - 2018-04-06 21:06:49 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 314
