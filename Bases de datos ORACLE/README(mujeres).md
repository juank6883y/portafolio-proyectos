# Base de Datos: Mujeres 👩‍💼👠

Este proyecto contiene la definición y los datos iniciales de la tabla **MUJERES**, creada en Oracle Database.  
La base de datos almacena información detallada sobre personas, su vestimenta y características asociadas.

---

## 📌 Estructura de la Tabla

**Nombre de la tabla:** `MUJERES`  
**Esquema:** `SYSTEM`

| Columna              | Tipo de dato        | Descripción |
|-----------------------|---------------------|-------------|
| ID                   | NUMBER (Identity)   | Identificador único de cada registro. |
| NOMBRES              | VARCHAR2(50)        | Nombres de la persona. |
| APELLIDOS            | VARCHAR2(50)        | Apellidos de la persona. |
| EDAD                 | NUMBER(3,0)         | Edad de la persona. |
| TIPO_ROPA            | VARCHAR2(50)        | Prenda(s) de vestir. |
| COLOR_ROPA           | VARCHAR2(50)        | Colores de la ropa. |
| TALLA_ROPA           | VARCHAR2(20)        | Tallas de las prendas. |
| MARCA_ROPA           | VARCHAR2(50)        | Marca de la ropa. |
| LLEVA_MEDIAS_VELADAS | CHAR(1)             | Indica si lleva medias veladas (S/N). |
| COLOR_ZAPATOS        | VARCHAR2(20)        | Color de los zapatos. |
| TALLA_ZAPATOS        | NUMBER(3,1)         | Talla del calzado. |
| LLEVA_TACONES        | CHAR(1)             | Indica si lleva tacones (S/N). |
| COLOR_TACONES        | VARCHAR2(20)        | Color de los tacones. |

---

## 🔑 Restricciones y Claves

- **Clave primaria:** `ID`
- **Índice único:** `SYS_C008315` en la columna `ID`

---

## 📊 Datos de Ejemplo

La tabla se inicializa con 10 registros de prueba:

| ID  | Nombres          | Apellidos        | Edad | Tipo Ropa        | Color Ropa    | Talla Ropa | Marca Ropa         | Medias Veladas | Zapatos | Talla Zapatos | Tacones | Color Tacones |
|-----|------------------|------------------|------|------------------|---------------|------------|--------------------|----------------|---------|---------------|---------|---------------|
| 1   | Yuli Catherine   | Rojas López      | 34   | Camiseta, Falda  | Rosado, Rojo  | XL, 38    | KOAJ, KOAJ         | S              | NULL    | NULL          | S       | Anaranjado    |
| 2   | Marcela Andrea   | García Torres    | 28   | Blusa, Pantalón  | Negro, Azul   | M, 36     | Zara, Levis        | N              | Blanco  | 7.5           | N       | NULL          |
| 3   | Laura Vanessa    | Martínez Peña    | 22   | Camiseta, Pantalón | Verde, Negro | S, 34     | Nike, Studio F     | N              | Negro   | 6             | S       | Negro         |
| 4   | Diana Carolina   | Ramírez Suárez   | 40   | Blusa, Falda     | Blanco, Azul  | L, 40     | KOAJ, Esprit       | S              | Azul    | 8             | N       | NULL          |
| 5   | Paola Juliana    | Castro Mendoza   | 31   | Camiseta, Pantalón | Gris, Azul Oscuro | M, 38 | Adidas, Americanino | N            | Rojo    | 7             | S       | Rojo          |

*(El dataset completo incluye 10 registros en total.)*

---

## 🚀 Uso

1. Conectar a Oracle Database con un usuario con permisos en el esquema `SYSTEM`.
2. Ejecutar el script `.sql` que contiene la definición y los inserts.
3. Consultar los registros con:

```sql
SELECT * FROM SYSTEM.MUJERES;
---
📂 Archivos Incluidos

mujeres.sql → Script con la creación de la tabla e inserción de datos.

README.md → Documentación del proyecto.

📜 Licencia

Este proyecto es de uso libre para fines académicos y de práctica.
