# 📚 Proyecto SQL - Tabla ESTUDIANTES

Este proyecto contiene un script SQL para crear y poblar la tabla **ESTUDIANTES** en Oracle Database.

---

## 🏗️ Estructura de la tabla
La tabla se crea en el esquema **JUAN** con la siguiente estructura:

| Columna  | Tipo           | Descripción                              |
|----------|---------------|------------------------------------------|
| ID       | NUMBER        | Identificador único, generado automáticamente |
| NOMBRE   | VARCHAR2(100) | Nombre del estudiante                    |
| APELLIDO | VARCHAR2(100) | Apellido del estudiante                  |
| NOTA     | NUMBER(5,2)   | Nota final del estudiante                |

---

## 📊 Datos iniciales
El script inserta dos registros de prueba:

| ID | Nombre  | Apellido  | Nota |
|----|---------|-----------|------|
| 1  | Carlos  | Gómez     | 4.5  |
| 2  | Laura   | Martínez  | 3.8  |

---

## ⚙️ Cómo usar
1. Clonar este repositorio.
2. Conectarse a Oracle con **SQL*Plus**.
3. Ejecutar el script:
   ```sql
   @estudiantes.sql
