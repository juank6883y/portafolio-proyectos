--------------------------------------------------------
-- Archivo creado  - jueves-septiembre-11-2025   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table CURSOS_SENA
--------------------------------------------------------

  CREATE TABLE "SYSTEM"."CURSOS_SENA" 
   (	"ID" NUMBER, 
	"NOMBRE" VARCHAR2(100 BYTE), 
	"DURACION" NUMBER, 
	"MODALIDAD" VARCHAR2(50 BYTE), 
	"NIVEL" VARCHAR2(50 BYTE), 
	"FECHA_INICIO" DATE, 
	"FECHA_FIN" DATE, 
	"INSTRUCTOR" VARCHAR2(100 BYTE)
   ) PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSTEM" ;
REM INSERTING into SYSTEM.CURSOS_SENA
SET DEFINE OFF;
Insert into SYSTEM.CURSOS_SENA (ID,NOMBRE,DURACION,MODALIDAD,NIVEL,FECHA_INICIO,FECHA_FIN,INSTRUCTOR) values ('1','Programación en Python','60','Virtual','Básico',to_date('15/09/25','DD/MM/RR'),to_date('30/10/25','DD/MM/RR'),'Juan Pérez');
Insert into SYSTEM.CURSOS_SENA (ID,NOMBRE,DURACION,MODALIDAD,NIVEL,FECHA_INICIO,FECHA_FIN,INSTRUCTOR) values ('2','Diseño Gráfico Digital','80','Presencial','Intermedio',to_date('20/09/25','DD/MM/RR'),to_date('10/11/25','DD/MM/RR'),'María López');
Insert into SYSTEM.CURSOS_SENA (ID,NOMBRE,DURACION,MODALIDAD,NIVEL,FECHA_INICIO,FECHA_FIN,INSTRUCTOR) values ('3','Gestión de Proyectos','100','Mixta','Avanzado',to_date('01/10/25','DD/MM/RR'),to_date('15/12/25','DD/MM/RR'),'Carlos Martínez');
Insert into SYSTEM.CURSOS_SENA (ID,NOMBRE,DURACION,MODALIDAD,NIVEL,FECHA_INICIO,FECHA_FIN,INSTRUCTOR) values ('4','Marketing Digital','50','Virtual','Básico',to_date('25/09/25','DD/MM/RR'),to_date('05/11/25','DD/MM/RR'),'Ana Gómez');
Insert into SYSTEM.CURSOS_SENA (ID,NOMBRE,DURACION,MODALIDAD,NIVEL,FECHA_INICIO,FECHA_FIN,INSTRUCTOR) values ('5','Robótica Educativa','120','Presencial','Intermedio',to_date('05/10/25','DD/MM/RR'),to_date('20/12/25','DD/MM/RR'),'Pedro Ramírez');
Insert into SYSTEM.CURSOS_SENA (ID,NOMBRE,DURACION,MODALIDAD,NIVEL,FECHA_INICIO,FECHA_FIN,INSTRUCTOR) values ('6','Base de Datos MySQL','70','Virtual','Básico',to_date('18/09/25','DD/MM/RR'),to_date('01/11/25','DD/MM/RR'),'Luisa Fernández');
Insert into SYSTEM.CURSOS_SENA (ID,NOMBRE,DURACION,MODALIDAD,NIVEL,FECHA_INICIO,FECHA_FIN,INSTRUCTOR) values ('7','Inteligencia Artificial','90','Mixta','Avanzado',to_date('10/10/25','DD/MM/RR'),to_date('30/12/25','DD/MM/RR'),'Jorge Torres');
Insert into SYSTEM.CURSOS_SENA (ID,NOMBRE,DURACION,MODALIDAD,NIVEL,FECHA_INICIO,FECHA_FIN,INSTRUCTOR) values ('8','Desarrollo de Apps Móviles','110','Presencial','Intermedio',to_date('28/09/25','DD/MM/RR'),to_date('10/12/25','DD/MM/RR'),'Sofía Castillo');
--------------------------------------------------------
--  DDL for Index SYS_C008433
--------------------------------------------------------

  CREATE UNIQUE INDEX "SYSTEM"."SYS_C008433" ON "SYSTEM"."CURSOS_SENA" ("ID") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSTEM" ;
--------------------------------------------------------
--  Constraints for Table CURSOS_SENA
--------------------------------------------------------

  ALTER TABLE "SYSTEM"."CURSOS_SENA" ADD PRIMARY KEY ("ID")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSTEM"  ENABLE;
