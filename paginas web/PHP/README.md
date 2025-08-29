# Proyecto PHP: Gestión de Empleados, Recetas y Pedidos de Pizzas

Este proyecto contiene tres mini-aplicaciones en PHP:  
1. **Gestión de empleados y cálculo de salario.**  
2. **Recetario con opciones saladas y dulces.**  
3. **Sistema de pedidos de pizzas con historial.**

---

## 📂 Estructura del proyecto

```
/proyecto-php
│
├── index.php
│
├── pedido_pizzas.php
│
├── recetas/
│   ├── css/
│   │   └── estilos.css
│   ├── img/
│   │   └── (imágenes de apoyo)
│   ├── index.php
│   └── receta.php
│
└── README.md
```

---

## ⚙️ Archivos principales

### 1. [(Gestión de empleados)](./index.php)

Este archivo solicita al usuario:  
- Nombre del empleado  
- Horas trabajadas  
- Categoría del empleado  

Con esta información, se procesa el **salario bruto**, se aplica un **descuento del 15%**, y se muestra en pantalla:  

- Nombre del empleado  
- Salario bruto  
- Descuento aplicado  
- Salario neto  

---

### 2. [Carpeta recetas/](./recetas/)

Contiene un recetario con dos categorías:  

- 🟢 **Recetas saladas** (color verde claro)  
- 🟠 **Recetas dulces/postres** (color naranja)  

#### Archivos:
- (./index.php) → Página principal del recetario.  
- (./receta.php) → Muestra el detalle de cada receta.  
- (./css/) → Archivos de estilos (incluye la paleta de colores).  
- (./img/) → Imágenes de apoyo para las recetas.  

Se incluyen **8 recetas en total** (5 saladas y 3 dulces).  

---

### 3. [pedido pizzas](./pedido_pizzas.php)

Este archivo permite:  
- Solicitar nombre y dirección del cliente.  
- Seleccionar la **cantidad de sabores** de pizza a pedir.  
- Mostrar el pedido en pantalla.  
- Guardar el pedido en un archivo **`historial_pedidos.txt`**.  
- Consultar todos los pedidos guardados.  
- Opción de **resetear el historial**, eliminando el archivo TXT.  

---

## 🚀 Ejecución del proyecto

1. Coloca todos los archivos en el servidor local (ej. `htdocs` de XAMPP o `www` de Laragon).  
2. Inicia el servidor Apache.  
3. Abre en el navegador:  
   - `http://localhost/index.php` → Gestión de empleados.  
   - `http://localhost/recetas/index.php` → Recetario.  
   - `http://localhost/pedido_pizzas.php` → Sistema de pedidos de pizza.  

---

## 📝 Notas adicionales

- El proyecto no utiliza base de datos, únicamente PHP y archivos `.txt` para almacenamiento del historial de pedidos.  
- Los estilos y colores están definidos en la carpeta **`recetas/css`**.  
- Las imágenes de apoyo deben almacenarse en la carpeta **`recetas/img`**.  

---

✍️ **Autor:** Proyecto creado con fines educativos.  
