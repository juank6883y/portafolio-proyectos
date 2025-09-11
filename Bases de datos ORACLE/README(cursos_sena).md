# Base de Datos: cursos_sena

Este repositorio contiene la definición y datos iniciales de la base de datos **cursos_sena**, creada en Oracle.

## 📌 Descripción

La base de datos **cursos_sena** gestiona la información de los cursos ofrecidos, incluyendo su duración, modalidad, nivel, fechas de inicio y fin, así como el nombre del instructor.

## 🗂️ Tabla Principal

### Tabla: `CURSOS_SENA`

| Columna       | Tipo de Dato     | Descripción                                 |
|---------------|------------------|---------------------------------------------|
| ID            | NUMBER           | Identificador único del curso (PK).         |
| NOMBRE        | VARCHAR2(100)    | Nombre del curso.                           |
| DURACION      | NUMBER           | Duración del curso en horas.                |
| MODALIDAD     | VARCHAR2(50)     | Modalidad del curso (Virtual, Presencial, Mixta). |
| NIVEL         | VARCHAR2(50)     | Nivel del curso (Básico, Intermedio, Avanzado). |
| FECHA_INICIO  | DATE             | Fecha de inicio del curso.                  |
| FECHA_FIN     | DATE             | Fecha de finalización del curso.            |
| INSTRUCTOR    | VARCHAR2(100)    | Nombre del instructor encargado.            |

## 🔑 Restricciones

- **Clave primaria:** `ID`
- **Índice único:** `ID`

## 📥 Datos de ejemplo

Se incluyen registros iniciales de cursos:

1. Programación en Python (Básico, Virtual)
2. Diseño Gráfico Digital (Intermedio, Presencial)
3. Gestión de Proyectos (Avanzado, Mixta)
4. Marketing Digital (Básico, Virtual)
5. Robótica Educativa (Intermedio, Presencial)
6. Base de Datos MySQL (Básico, Virtual)
7. Inteligencia Artificial (Avanzado, Mixta)
8. Desarrollo de Apps Móviles (Intermedio, Presencial)

## 🚀 Uso

1. Conéctate a Oracle con tu usuario y contraseña.
2. Ejecuta el script SQL incluido en este repositorio para crear la tabla y cargar los datos.

## 📅 Metadatos

- **Fecha de creación del archivo:** jueves, 11 de septiembre de 2025
- **Tablespace:** SYSTEM

---
✍️ Autor: Proyecto de práctica con Oracle y SQL Developer
