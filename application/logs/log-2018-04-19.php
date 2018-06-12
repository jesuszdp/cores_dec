<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-19 16:38:56 --> Query error: ERROR:  column "dfs" does not exist
LINE 7: AND UI.id_delegacion = DFS
                               ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND UI.id_delegacion = DFS
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:39:48 --> Query error: ERROR:  column "dfs" does not exist
LINE 7: AND UI.id_delegacion = DFS
                               ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND UI.id_delegacion = DFS
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:41:49 --> Query error: ERROR:  column "dfs" does not exist
LINE 7: AND UI.id_delegacion = DFS
                               ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND UI.id_delegacion = DFS
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:41:52 --> Query error: ERROR:  column "dfs" does not exist
LINE 7: AND UI.id_delegacion = DFS
                               ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND UI.id_delegacion = DFS
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:43:13 --> Query error: ERROR:  column "dfs" does not exist
LINE 7: AND UI.grupo_delegacion = DFS
                                  ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND UI.grupo_delegacion = DFS
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:43:48 --> Query error: ERROR:  syntax error at or near "likeDFS"
LINE 7: AND UI.grupo_delegacion likeDFS
                                ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND UI.grupo_delegacion likeDFS
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:44:31 --> Query error: ERROR:  column "dfs" does not exist
LINE 7: AND UI.grupo_delegacion like DFS
                                     ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND UI.grupo_delegacion like DFS
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:47:31 --> Severity: Warning --> Illegal string offset 'UI.grupo_delegacion' /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Ranking_dec_model.php 87
ERROR - 2018-04-19 16:47:31 --> Severity: Warning --> Invalid argument supplied for foreach() /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Ranking_dec_model.php 311
ERROR - 2018-04-19 16:48:40 --> Query error: ERROR:  missing FROM-clause entry for table "UI"
LINE 7: AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
             ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:49:35 --> Query error: ERROR:  missing FROM-clause entry for table "UI"
LINE 7: AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
             ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:50:06 --> Query error: ERROR:  missing FROM-clause entry for table "UI"
LINE 7: AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
             ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:50:25 --> Query error: ERROR:  missing FROM-clause entry for table "UI"
LINE 7: AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
             ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:50:44 --> Query error: ERROR:  missing FROM-clause entry for table "UI"
LINE 7: AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
             ^ - Invalid query: SELECT PP.nombre, HI.id_programa_proyecto, sum(HI.denominador::numeric) programados, sum(HI.numerador::numeric) reales
                        from dec.h_indicadores HI
LEFT JOIN catalogos.programas_proyecto PP ON PP.id_programa_proyecto = HI.id_programa_proyecto
LEFT JOIN catalogos.unidades_instituto UI ON UI.clave_unidad = HI.cve_unidad and UI.anio = HI.anio and UI.activa = true
WHERE HI.anio = 2017
AND HI.denominador >0
AND  "UI"."grupo_delegacion" LIKE '%DFS%' ESCAPE '!'
AND UI.nivel_atencion='1' OR UI.nivel_atencion='2'
GROUP BY PP.nombre, HI.id_programa_proyecto
ORDER BY programados DESC
ERROR - 2018-04-19 16:59:53 --> Query error: ERROR:  syntax error at or near "AS"
LINE 1: select * from catalogos.delegaciones where id_delegacion=AS
                                                                 ^ - Invalid query: select * from catalogos.delegaciones where id_delegacion=AS
ERROR - 2018-04-19 17:00:46 --> Query error: ERROR:  syntax error at or near "AS"
LINE 1: ...lect * from catalogos.delegaciones where grupo_delegacion=AS
                                                                     ^ - Invalid query: select * from catalogos.delegaciones where grupo_delegacion=AS
ERROR - 2018-04-19 17:01:13 --> Query error: ERROR:  missing FROM-clause entry for table "UI"
LINE 7: AND  "UI"."grupo_delegacion" LIKE '%AS%' ESCAPE '!'
             ^ - Invalid query: SELECT count(UI.clave_unidad) total_unidades from catalogos.unidades_instituto UI
WHERE UI.activa = true
AND UI.anio = 2017
AND UI.nivel_atencion = 1
AND UI.id_region = 1
AND UI.id_tipo_unidad = 1
AND  "UI"."grupo_delegacion" LIKE '%AS%' ESCAPE '!'
ERROR - 2018-04-19 17:01:41 --> Query error: ERROR:  missing FROM-clause entry for table "UI"
LINE 7: AND  "UI"."grupo_delegacion" LIKE '%AS%' ESCAPE '!'
             ^ - Invalid query: SELECT count(UI.clave_unidad) total_unidades from catalogos.unidades_instituto UI
WHERE UI.activa = true
AND UI.anio = 2017
AND UI.nivel_atencion = 1
AND UI.id_region = 1
AND UI.id_tipo_unidad = 1
AND  "UI"."grupo_delegacion" LIKE '%AS%' ESCAPE '!'
ERROR - 2018-04-19 17:02:51 --> Severity: error --> Exception: Call to a member function result_array() on string /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Catalogo_model.php 300
ERROR - 2018-04-19 17:03:12 --> Severity: error --> Exception: Call to a member function result_array() on string /Users/cheko/Documents/MAPP/apache2/htdocs/cores_pro2/application/models/Catalogo_model.php 301
ERROR - 2018-04-19 17:04:04 --> Query error: ERROR:  syntax error at or near "AS"
LINE 1: ...m catalogos.delegaciones where grupo!_delegacion like ''AS''
                                                                   ^ - Invalid query: select * from catalogos.delegaciones where grupo!_delegacion like ''AS''
ERROR - 2018-04-19 17:04:40 --> Query error: ERROR:  syntax error at or near "AS"
LINE 1: ... catalogos.delegaciones where grupo!_delegacion like ''AS'';
                                                                  ^ - Invalid query: select * from catalogos.delegaciones where grupo!_delegacion like ''AS'';
ERROR - 2018-04-19 17:05:59 --> Query error: ERROR:  syntax error at or near "AS"
LINE 1: ... from catalogos.delegaciones where grupo!_delegacion like AS
                                                                     ^ - Invalid query: select * from catalogos.delegaciones where grupo!_delegacion like AS
ERROR - 2018-04-19 17:06:18 --> Query error: ERROR:  syntax error at or near "AS"
LINE 1: ...m catalogos.delegaciones D where D.grupo!_delegacion like AS
                                                                     ^ - Invalid query: select * from catalogos.delegaciones D where D.grupo!_delegacion like AS
