# Base de Datos - Gimnasio

Este repositorio contiene el script de creación y carga inicial de datos para la base de datos **Gimnasio** en Oracle.

## 📅 Fecha de creación del archivo
**Miércoles, 10 de septiembre de 2025**

---

## 📋 Estructura de la Tabla

### Tabla: `SOCIO`
La tabla almacena la información de los socios registrados en el gimnasio.

| Columna        | Tipo de Dato  | Descripción |
|----------------|---------------|-------------|
| `ID_SOCIO`     | NUMBER (Identity) | Identificador único del socio. |
| `NOMBRE`       | VARCHAR2(50)  | Nombre del socio. |
| `APELLIDO`     | VARCHAR2(50)  | Apellido del socio. |
| `EDAD`         | NUMBER        | Edad del socio. |
| `FECHA_INGRESO`| DATE          | Fecha en la que el socio ingresó al gimnasio. |

### Restricciones y Claves
- **Primary Key:** `ID_SOCIO`
- **Índice único:** `SYS_C008221` sobre `ID_SOCIO`

---

## 📦 Datos de ejemplo cargados

```sql
Insert into GIMNASIO.SOCIO (ID_SOCIO,NOMBRE,APELLIDO,EDAD,FECHA_INGRESO) values (1,'Juan','Pérez',28,to_date('10/05/23','DD/MM/RR'));
Insert into GIMNASIO.SOCIO (ID_SOCIO,NOMBRE,APELLIDO,EDAD,FECHA_INGRESO) values (2,'María','Gómez',34,to_date('20/11/22','DD/MM/RR'));
Insert into GIMNASIO.SOCIO (ID_SOCIO,NOMBRE,APELLIDO,EDAD,FECHA_INGRESO) values (3,'Carlos','López',40,to_date('15/08/21','DD/MM/RR'));
Insert into GIMNASIO.SOCIO (ID_SOCIO,NOMBRE,APELLIDO,EDAD,FECHA_INGRESO) values (4,'Lucía','Martínez',22,to_date('05/01/24','DD/MM/RR'));
Insert into GIMNASIO.SOCIO (ID_SOCIO,NOMBRE,APELLIDO,EDAD,FECHA_INGRESO) values (5,'Andrés','Ramírez',30,to_date('18/03/23','DD/MM/RR'));
Insert into GIMNASIO.SOCIO (ID_SOCIO,NOMBRE,APELLIDO,EDAD,FECHA_INGRESO) values (6,'Sofía','Hernández',27,to_date('22/07/22','DD/MM/RR'));
Insert into GIMNASIO.SOCIO (ID_SOCIO,NOMBRE,APELLIDO,EDAD,FECHA_INGRESO) values (7,'Pedro','Castillo',35,to_date('12/12/21','DD/MM/RR'));
```

---

## 🚀 Uso

1. Clonar este repositorio.
2. Conectarse a una base de datos **Oracle**.
3. Ejecutar el script `.sql` que contiene la definición de la tabla y los inserts.

```bash
sqlplus usuario/password@//localhost:1521/XEPDB1 @gimnasio.sql
```

---

## 🛠️ Requisitos

- Oracle Database 19c o superior.
- SQL Developer o consola `sqlplus` para ejecutar los scripts.

---

## ✨ Autor

Proyecto de práctica de **gestión de bases de datos Oracle**.
