<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-11 09:38:09 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 140
ERROR - 2018-04-11 10:26:37 --> Severity: error --> Exception: syntax error, unexpected ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 179
ERROR - 2018-04-11 10:27:53 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 178
ERROR - 2018-04-11 10:27:54 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 178
ERROR - 2018-04-11 10:27:55 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 178
ERROR - 2018-04-11 10:29:15 --> Severity: error --> Exception: syntax error, unexpected ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 179
ERROR - 2018-04-11 10:29:16 --> Severity: error --> Exception: syntax error, unexpected ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 179
ERROR - 2018-04-11 10:29:30 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-11 10:30:37 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-11 10:34:31 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-11 11:15:24 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-11 11:33:28 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-11 13:10:34 --> Severity: error --> Exception: syntax error, unexpected '$nombre_tabla' (T_VARIABLE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 55
ERROR - 2018-04-11 13:11:03 --> Severity: error --> Exception: syntax error, unexpected '$nombre_tabla' (T_VARIABLE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 55
ERROR - 2018-04-11 13:11:26 --> Severity: error --> Exception: syntax error, unexpected '$order_by' (T_VARIABLE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 84
ERROR - 2018-04-11 13:11:27 --> Severity: error --> Exception: syntax error, unexpected '$order_by' (T_VARIABLE) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 84
ERROR - 2018-04-11 13:11:48 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/ranking/ranking.php 246
ERROR - 2018-04-11 13:12:00 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 306
ERROR - 2018-04-11 13:12:15 --> Severity: Notice --> Undefined index: condition /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 692
ERROR - 2018-04-11 13:12:15 --> Severity: Notice --> Undefined index: condition /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 692
ERROR - 2018-04-11 13:12:15 --> Severity: Notice --> Undefined index: condition /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 692
ERROR - 2018-04-11 13:12:15 --> Severity: Notice --> Undefined index: condition /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 692
ERROR - 2018-04-11 13:12:15 --> Query error: ERROR:  syntax error at or near ")"
LINE 3: JOIN "catalogos"."delegaciones" "D" USING ()
                                                   ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" "delegacion", "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerador) as numerador, sum(HI.denominador) as denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" USING ()
JOIN "catalogos"."regiones" "R" USING ()
LEFT JOIN "dec"."h_indicadores" "HI" USING ()
LEFT JOIN "catalogos"."programas_proyecto" "PP" USING ()
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "by" "pp"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "pp"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/Exceptions.php:271) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/system/core/Common.php 570
ERROR - 2018-04-11 13:13:20 --> Query error: ERROR:  syntax error at or near ""pp""
LINE 10: GROUP BY "by" "pp"."nombre", "D"."clave_delegacional", "D"."...
                       ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" "delegacion", "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerador) as numerador, sum(HI.denominador) as denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "by" "pp"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "pp"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:13:52 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ..., "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" "delegacion", "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerador) as numerador, sum(HI.denominador) as denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:26:27 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ..., "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" "delegacion", "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerador) as numerador
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:33:25 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) as denomi' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:34:35 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) denominad' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:34:59 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) denominad' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:35:26 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) denominad' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:35:30 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) denominad' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:35:48 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) denominad' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:36:03 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) denominad' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:36:05 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) denominad' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:36:33 --> Severity: error --> Exception: syntax error, unexpected ''sum(HI.denominador) as denomi' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 53
ERROR - 2018-04-11 13:37:02 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ..., "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" "delegacion", "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:38:02 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ...UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" as "programa_educativo", "D"."clave_delegacional", "D"."nombre" as "delegacion", "UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerador) as numerador, sum(HI.denominador) as denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) as porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:38:31 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ...UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" as "delegacion", "UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerador) as numerador, sum(HI.denominador) as denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) as porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:38:58 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ...UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" as "delegacion", "UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerador) as numerador, sum(HI.denominador) as denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) as porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:39:00 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ...UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" as "delegacion", "UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerador) as numerador, sum(HI.denominador) as denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) as porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:39:10 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ..., "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" "delegacion", "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:40:16 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ...UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" as "programa_educativo", "D"."clave_delegacional", "D"."nombre" as "delegacion", "UI"."nombre" as "unidad", "PP"."descripcion", sum(HI.numerador) as "numerador", sum(HI.denominador) as "denominador", round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) as "porcentaje"
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:42:51 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ..., "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" "delegacion", "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:47:56 --> Query error: ERROR:  missing FROM-clause entry for table "pp"
LINE 1: SELECT PP.nombre programa_educativo, D.clave_delegacional, D...
               ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric),0))*100,2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:50:10 --> Severity: error --> Exception: syntax error, unexpected ',' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 52
ERROR - 2018-04-11 13:50:52 --> Query error: ERROR:  missing FROM-clause entry for table "hi"
LINE 1: ..., "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerad...
                                                             ^ - Invalid query: SELECT "PP"."nombre" "programa_educativo", "D"."clave_delegacional", "D"."nombre" "delegacion", "UI"."nombre" "unidad", "PP"."descripcion", sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:51:21 --> Query error: ERROR:  missing FROM-clause entry for table "pp"
LINE 1: SELECT PP.nombre programa_educativo, D.clave_delegacional, D...
               ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN "catalogos"."delegaciones" "D" ON "D"."id_delegacion" = "UI"."id_delegacion"
JOIN "catalogos"."regiones" "R" ON "R"."id_region" = "D"."id_region"
LEFT JOIN "dec"."h_indicadores" "HI" ON "HI"."cve_presupuestal" = "UI"."clave_presupuestal"
LEFT JOIN "catalogos"."programas_proyecto" "PP" ON "PP"."id_programa_proyecto" = "HI"."id_programa_proyecto"
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:56:17 --> Query error: ERROR:  missing FROM-clause entry for table "ui"
LINE 3: ...OIN catalogos.delegaciones D ON D.id_delegacion = UI.id_dele...
                                                             ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE "HI"."anio" = 2017
AND "UI"."anio" = 2017
AND "UI"."nivel_atencion" = '1'
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:56:43 --> Query error: ERROR:  missing FROM-clause entry for table "ui"
LINE 3: ...OIN catalogos.delegaciones D ON D.id_delegacion = UI.id_dele...
                                                             ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
GROUP BY "PP"."nombre", "D"."clave_delegacional", "D"."nombre", "UI"."nombre", "PP"."descripcion"
ORDER BY "UI"."nombre" ASC
ERROR - 2018-04-11 13:57:25 --> Query error: ERROR:  missing FROM-clause entry for table "ui"
LINE 3: ...OIN catalogos.delegaciones D ON D.id_delegacion = UI.id_dele...
                                                             ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
GROUP BY PP.nombre, D.clave_delegacional, D.nombre, UI.nombre, PP.descripcion
ORDER BY UI.nombre ASC
ERROR - 2018-04-11 13:59:33 --> Query error: ERROR:  missing FROM-clause entry for table "ui"
LINE 3: ...OIN catalogos.delegaciones D ON D.id_delegacion = UI.id_dele...
                                                             ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" as "UI"
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
GROUP BY PP.nombre, D.clave_delegacional, D.nombre, UI.nombre, PP.descripcion
ORDER BY UI.nombre ASC
ERROR - 2018-04-11 14:00:02 --> Query error: ERROR:  missing FROM-clause entry for table "ui"
LINE 3: ...OIN catalogos.delegaciones D ON D.id_delegacion = UI.id_dele...
                                                             ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" as "UI"
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
GROUP BY PP.nombre, D.clave_delegacional, D.nombre, UI.nombre, PP.descripcion
ORDER BY UI.nombre ASC
ERROR - 2018-04-11 15:26:19 --> Severity: Notice --> Undefined variable: nombre_tabla /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 91
ERROR - 2018-04-11 15:26:19 --> Severity: error --> Exception: Call to undefined method CI_DB_pdo_pgsql_driver::form() /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 686
ERROR - 2018-04-11 15:27:33 --> Severity: error --> Exception: Call to undefined method CI_DB_pdo_pgsql_driver::result_array() /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 743
ERROR - 2018-04-11 15:29:26 --> Query error: ERROR:  missing FROM-clause entry for table "ui"
LINE 3: ...OIN catalogos.delegaciones D ON D.id_delegacion = UI.id_dele...
                                                             ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
GROUP BY PP.nombre, D.clave_delegacional, D.nombre, UI.nombre, PP.descripcion
ORDER BY UI.nombre ASC
ERROR - 2018-04-11 15:30:16 --> Query error: ERROR:  missing FROM-clause entry for table "ui"
LINE 3: ...OIN catalogos.delegaciones D ON D.id_delegacion = UI.id_dele...
                                                             ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
GROUP BY PP.nombre, D.clave_delegacional, D.nombre, UI.nombre, PP.descripcion
ORDER BY UI.nombre ASC
ERROR - 2018-04-11 15:30:19 --> Query error: ERROR:  missing FROM-clause entry for table "ui"
LINE 3: ...OIN catalogos.delegaciones D ON D.id_delegacion = UI.id_dele...
                                                             ^ - Invalid query: SELECT PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
FROM "catalogos"."unidades_instituto" "UI"
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
GROUP BY PP.nombre, D.clave_delegacional, D.nombre, UI.nombre, PP.descripcion
ORDER BY UI.nombre ASC
ERROR - 2018-04-11 15:46:30 --> Query error: ERROR:  syntax error at or near "select"
LINE 1: SELECT select PP.nombre programa_educativo, D.clave_delegaci...
               ^ - Invalid query: SELECT select PP.nombre programa_educativo, D.clave_delegacional, D.nombre delegacion, UI.nombre unidad, PP.descripcion, sum(HI.numerador) numerador, sum(HI.denominador) denominador, round((sum(HI.numerador::numeric) / nullif(sum(HI.denominador::numeric), 0))*100, 2) porcentaje
                                   from catalogos.unidades_instituto UI
JOIN catalogos.delegaciones D ON D.id_delegacion = UI.id_delegacion
JOIN catalogos.regiones R ON R.id_region = D.id_region
LEFT JOIN dec.h_indicadores HI ON HI.cve_presupuestal = UI.clave_presupuestal
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
WHERE HI.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 1
GROUP BY PP.nombre, D.clave_delegacional, D.nombre, UI.nombre, PP.descripcion
ORDER BY UI.nombre ASC
ERROR - 2018-04-11 16:05:38 --> Severity: error --> Exception: syntax error, unexpected '=', expecting ')' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 162
ERROR - 2018-04-11 16:24:46 --> Severity: error --> Exception: syntax error, unexpected 'nivel' (T_STRING) /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Dec_model.php 268
ERROR - 2018-04-11 16:25:17 --> Severity: Notice --> Undefined variable: filtros /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/views/dec/informacion_general/por_delegacion.php 306
ERROR - 2018-04-11 16:25:31 --> Query error: ERROR:  syntax error at or near "select"
LINE 1: SELECT select count(TU) total_unidades from
               ^ - Invalid query: SELECT select count(TU) total_unidades from
                        (select * from catalogos.unidades_instituto UI
                        where UI.anio = 2017 and UI.nivel_atencion = 2) TU
ERROR - 2018-04-11 16:50:16 --> Query error: ERROR:  syntax error at or near "select"
LINE 1: SELECT select UI.id_delegacion, count(distinct hi.cve_presup...
               ^ - Invalid query: SELECT select UI.id_delegacion, count(distinct hi.cve_presupuestal) total_unidades
                    from catalogos.unidades_instituto UI
LEFT JOIN dec.h_indicadores hi ON hi.cve_presupuestal = UI.clave_presupuestal
INNER JOIN catalogos.programas_proyecto pp ON pp.id_programa_proyecto = hi.id_programa_proyecto
WHERE hi.anio = 2017
AND UI.anio = 2017
AND UI.nivel_atencion = 2
AND hi.numerador >0
GROUP BY UI.id_delegacion
HAVING sum(hi.numerador) >0
