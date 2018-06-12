<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-12 08:30:45 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 306
ERROR - 2018-04-12 08:30:55 --> Severity: Notice --> Undefined index: id_region /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 448
ERROR - 2018-04-12 08:32:03 --> Severity: Notice --> Undefined index: id_region /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 460
ERROR - 2018-04-12 09:59:09 --> Severity: error --> Exception: syntax error, unexpected '=', expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Ranking_dec_model.php 278
ERROR - 2018-04-12 09:59:15 --> Severity: error --> Exception: syntax error, unexpected '=', expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Ranking_dec_model.php 278
ERROR - 2018-04-12 10:00:28 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-12 10:04:27 --> Query error: ERROR:  SELECT * with no tables specified is not valid
LINE 1: SELECT *
               ^ - Invalid query: SELECT *
ERROR - 2018-04-12 10:05:56 --> Query error: ERROR:  SELECT * with no tables specified is not valid
LINE 1: SELECT *
               ^ - Invalid query: SELECT *
ERROR - 2018-04-12 10:06:15 --> Query error: ERROR:  SELECT * with no tables specified is not valid
LINE 1: SELECT *
               ^ - Invalid query: SELECT *
ERROR - 2018-04-12 10:08:20 --> Query error: ERROR:  SELECT * with no tables specified is not valid
LINE 1: SELECT *
               ^ - Invalid query: SELECT *
ERROR - 2018-04-12 10:10:21 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-12 10:10:50 --> Query error: ERROR:  SELECT * with no tables specified is not valid
LINE 1: SELECT *
               ^ - Invalid query: SELECT *
ERROR - 2018-04-12 10:35:12 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 6: WHERE HI.numerador >0
              ^ - Invalid query: SELECT count(distinct T.unidad) total_unidades
                        from (select HI.id_programa_proyecto, UI.nombre unidad, HI.cve_presupuestal clave_unidad, sum(HI.numerador) numerador, sum(HI.denominador) denominador from dec.h_indicadores HI
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = HI.cve_presupuestal
                        where hi.numerador > 0 and hi.anio = 2017 and UI.nivel_atencion = 3 and UI.anio = 2017
                        group by HI.cve_presupuestal, UI.nombre, HI.id_programa_proyecto) T
WHERE HI.numerador >0
ERROR - 2018-04-12 10:38:39 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 6: WHERE HI.numerador >0
              ^ - Invalid query: SELECT count(distinct T.unidad) total_unidades
                        from (select HI.id_programa_proyecto, UI.nombre unidad, HI.cve_presupuestal clave_unidad, sum(HI.numerador) numerador, sum(HI.denominador) denominador from dec.h_indicadores HI
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = HI.cve_presupuestal
                        where hi.numerador > 0 and HI.anio = 2017 and UI.nivel_atencion = 3 and UI.anio = 2017
                        group by HI.cve_presupuestal, UI.nombre, HI.id_programa_proyecto) T
WHERE HI.numerador >0
ERROR - 2018-04-12 10:38:42 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 6: WHERE HI.numerador >0
              ^ - Invalid query: SELECT count(distinct T.unidad) total_unidades
                        from (select HI.id_programa_proyecto, UI.nombre unidad, HI.cve_presupuestal clave_unidad, sum(HI.numerador) numerador, sum(HI.denominador) denominador from dec.h_indicadores HI
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = HI.cve_presupuestal
                        where hi.numerador > 0 and HI.anio = 2017 and UI.nivel_atencion = 3 and UI.anio = 2017
                        group by HI.cve_presupuestal, UI.nombre, HI.id_programa_proyecto) T
WHERE HI.numerador >0
ERROR - 2018-04-12 10:39:19 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 6: WHERE HI.numerador >0
              ^ - Invalid query: SELECT count(distinct T.unidad) total_unidades
                        from (select HI.id_programa_proyecto, UI.nombre unidad, HI.cve_presupuestal clave_unidad, sum(HI.numerador) numerador, sum(HI.denominador) denominador from dec.h_indicadores HI
                        inner join catalogos.unidades_instituto UI on UI.clave_presupuestal = HI.cve_presupuestal
                        where HI.numerador > 0 and HI.anio = 2017 and UI.nivel_atencion = 3 and UI.anio = 2017
                        group by HI.cve_presupuestal, UI.nombre, HI.id_programa_proyecto) T
WHERE HI.numerador >0
ERROR - 2018-04-12 10:50:42 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 306
ERROR - 2018-04-12 10:51:22 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 306
ERROR - 2018-04-12 10:51:44 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 306
ERROR - 2018-04-12 10:58:01 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 10:59:11 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 10:59:49 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 10:59:53 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:00:15 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:01:55 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:04:08 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:04:53 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:06:09 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:08:33 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:10:19 --> Severity: error --> Exception: Too few arguments to function Dec::tipos_unidades(), 0 passed in /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 326
ERROR - 2018-04-12 11:10:54 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:12:06 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...= 1 and UI.id_region = 1 and UI.id_tipo_unidad =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region = 1 and UI.id_tipo_unidad =  and UI.id_delegacion = 2) TU
ERROR - 2018-04-12 11:12:59 --> Severity: error --> Exception: Too few arguments to function Dec::tipos_unidades(), 0 passed in /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 326
ERROR - 2018-04-12 11:13:29 --> Severity: Notice --> Undefined index: tipos_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 309
ERROR - 2018-04-12 11:13:29 --> Severity: Notice --> Undefined index: tipos_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 327
ERROR - 2018-04-12 11:13:29 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...    where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_region = 1 and UI.id_tipo_unidad =  and UI.id_delegacion = ) TU
ERROR - 2018-04-12 11:15:22 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 307
ERROR - 2018-04-12 11:15:31 --> Severity: error --> Exception: Too few arguments to function Dec::obtener_delegaciones(), 0 passed in /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 343
ERROR - 2018-04-12 11:16:08 --> Severity: Notice --> Undefined index: tipos_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 309
ERROR - 2018-04-12 11:16:08 --> Severity: Notice --> Undefined index: tipos_unidades /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 327
ERROR - 2018-04-12 11:16:08 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...= 1 and UI.id_region = 1 and UI.id_tipo_unidad =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region = 1 and UI.id_tipo_unidad =  and UI.id_delegacion = 2) TU
ERROR - 2018-04-12 11:29:08 --> Severity: error --> Exception: Too few arguments to function Dec::obtener_delegaciones(), 0 passed in /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 343
ERROR - 2018-04-12 11:29:57 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:30:20 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...    where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_region =  and UI.id_tipo_unidad =  and UI.id_delegacion = ) TU
ERROR - 2018-04-12 11:31:02 --> Severity: error --> Exception: Too few arguments to function Dec::obtener_delegaciones(), 0 passed in /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 343
ERROR - 2018-04-12 11:31:46 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...    where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_region =  and UI.id_tipo_unidad =  and UI.id_delegacion = ) TU
ERROR - 2018-04-12 11:32:21 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:32:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:32:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:32:58 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:33:04 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:33:06 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:37:01 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:40:14 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:42:23 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:43:10 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 11:51:56 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 11:52:09 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 11:52:34 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 11:54:16 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 11:55:17 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 11:55:43 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 11:56:32 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 11:56:50 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 11:57:07 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 11:57:48 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 11:58:02 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 11:58:06 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...    where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_region =  and UI.id_tipo_unidad =  and UI.id_delegacion = ) TU
ERROR - 2018-04-12 11:58:09 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 11:59:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 11:59:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:00:55 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 300
ERROR - 2018-04-12 12:01:11 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...    where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion =  and UI.id_region =  and UI.id_tipo_unidad =  and UI.id_delegacion = ) TU
ERROR - 2018-04-12 12:03:10 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 12:03:16 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 12:03:27 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 12:03:39 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 12:07:58 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 12:08:14 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 12:11:37 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 12:13:15 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 298
ERROR - 2018-04-12 12:13:37 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 12:14:36 --> Query error: ERROR:  syntax error at or near ")"
LINE 2: ... 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
                                                                   ^ - Invalid query: SELECT count(TU) total_unidades from (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 3 and UI.id_tipo_unidad = ) TU
ERROR - 2018-04-12 12:19:38 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:24:00 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:24:11 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:24:37 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:24:47 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:24:55 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-12 12:34:17 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-12 12:34:37 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 301
ERROR - 2018-04-12 12:35:08 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 301
ERROR - 2018-04-12 12:35:11 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 301
ERROR - 2018-04-12 12:35:21 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:37:27 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:37:37 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:39:41 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:39:52 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:43:51 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:51:18 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:51:48 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:52:08 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:54:15 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...= 1 and UI.id_region = 1 and UI.id_tipo_unidad =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region = 1 and UI.id_tipo_unidad =  and UI.id_delegacion = 2) TU
ERROR - 2018-04-12 12:54:07 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:54:22 --> Query error: ERROR:  syntax error at or near "and"
LINE 3: ...= 1 and UI.id_region = 2 and UI.id_tipo_unidad =  and UI.id_...
                                                             ^ - Invalid query: SELECT count(TU) total_unidades from
                                            (select * from catalogos.unidades_instituto UI
                                            where UI.anio = 2017 and UI.nivel_atencion = 1 and UI.id_region = 2 and UI.id_tipo_unidad =  and UI.id_delegacion = 6) TU
ERROR - 2018-04-12 12:54:28 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:55:01 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:55:23 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:55:58 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 12:56:45 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 13:02:49 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ',' or ';' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 299
ERROR - 2018-04-12 13:24:48 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-12 13:31:53 --> Query error: ERROR:  column "todos" does not exist
LINE 10: AND R.id_region = Todos
                           ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
                               from catalogos.unidades_instituto UI
INNER JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
INNER JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
AND R.id_region = Todos
AND UI.id_tipo_unidad = 1
GROUP BY PP.nombre, D.clave_delegacional, D.nombre, UI.nombre, PP.descripcion
ORDER BY UI.nombre ASC
ERROR - 2018-04-12 13:32:25 --> Severity: error --> Exception: Too few arguments to function Dec::tipos_unidades(), 0 passed in /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 326
ERROR - 2018-04-12 13:32:28 --> Severity: error --> Exception: Too few arguments to function Dec::obtener_delegaciones(), 0 passed in /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 343
ERROR - 2018-04-12 13:33:47 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 247
ERROR - 2018-04-12 13:33:54 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 247
ERROR - 2018-04-12 13:34:03 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 247
ERROR - 2018-04-12 13:35:01 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:35:49 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:36:00 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:36:49 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:37:24 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:38:28 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:38:41 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:39:32 --> Severity: error --> Exception: Too few arguments to function Dec::obtener_delegaciones(), 0 passed in /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/CodeIgniter.php on line 532 and exactly 1 expected /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/controllers/Dec.php 343
ERROR - 2018-04-12 13:40:22 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:40:32 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:40:53 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:41:55 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:44:51 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:48:03 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:48:58 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:49:01 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:49:38 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:50:06 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:51:18 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:51:53 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:52:13 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:53:13 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:53:26 --> Query error: ERROR:  syntax error at or near "AND"
LINE 10: AND UI.id_delegacion = 
         ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados
            from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_presupuestal = HI.cve_presupuestal
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 3
AND HI.denominador >0
AND UI.id_region = 
AND UI.id_delegacion = 
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-12 13:55:05 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:58:50 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 13:58:54 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 239
ERROR - 2018-04-12 16:01:27 --> Query error: ERROR:  syntax error at or near "GROUP"
LINE 11: GROUP BY PP.nombre, HI.id_programa_proyecto
         ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_presupuestal = HI.cve_presupuestal
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 2
AND HI.denominador >0
AND UI.id_region = 3
AND UI.id_delegacion = 
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-12 16:01:38 --> Query error: ERROR:  syntax error at or near "GROUP"
LINE 11: GROUP BY PP.nombre, HI.id_programa_proyecto
         ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_presupuestal = HI.cve_presupuestal
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 2
AND HI.denominador >0
AND UI.id_region = 3
AND UI.id_delegacion = 
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-12 16:03:14 --> Query error: ERROR:  syntax error at or near "GROUP"
LINE 11: GROUP BY PP.nombre, HI.id_programa_proyecto
         ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_presupuestal = HI.cve_presupuestal
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 2
AND HI.denominador >0
AND UI.id_region = 3
AND UI.id_delegacion = 
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-12 16:04:17 --> Query error: ERROR:  syntax error at or near "GROUP"
LINE 11: GROUP BY PP.nombre, HI.id_programa_proyecto
         ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_presupuestal = HI.cve_presupuestal
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 2
AND HI.denominador >0
AND UI.id_region = 3
AND UI.id_delegacion = 
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-12 16:10:34 --> Query error: ERROR:  syntax error at or near "GROUP"
LINE 10: GROUP BY PP.nombre, HI.id_programa_proyecto
         ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_presupuestal = HI.cve_presupuestal
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 2
AND HI.numerador >0
AND UI.id_delegacion = 
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY reales DESC
