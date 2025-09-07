## 📄 INSTRUCCIONES.md

# 📘 Instrucciones para ejecutar el script SQL

Este proyecto contiene un archivo SQL para crear y poblar la tabla **ESTUDIANTES** en Oracle Database.

---

## ✅ Requisitos previos
- Tener instalado **Docker** o una instancia de Oracle Database.
- Acceso a **SQL*Plus** u otro cliente Oracle.
- Usuario con permisos de creación de objetos (en este caso el esquema **JUAN**).

---

## 🚀 Pasos para ejecutar

1. **Conectarse a Oracle dentro del contenedor**       
docker exec -it oracle-db sqlplus sys/TuPassword123@ORCLCDB as sysdba

2. **Cambiar al usuario correcto (si aplica)**
  ```bash
ALTER SESSION SET CURRENT_SCHEMA=JUAN;
`````
3. **Ejecutar el script**
```bash
@estudiantes.sql
`````
4. **Verificar que la tabla fue creada**
```bash
SELECT table_name FROM user_tables WHERE table_name = 'ESTUDIANTES';
`````
5. **Consultar los datos insertados**
```bash
SELECT * FROM ESTUDIANTES;
`````
6. **Salir de SQL*Plus**
```bash
EXIT;
`````
📌 Notas

- El script crea la tabla ESTUDIANTES con las columnas: ID, NOMBRE, APELLIDO, NOTA.
- Incluye la inserción inicial de dos registros:
  - Carlos Gómez → Nota 4.5
  - Laura Martínez → Nota 3.8  
- Define un índice único y una clave primaria sobre el campo ID.
