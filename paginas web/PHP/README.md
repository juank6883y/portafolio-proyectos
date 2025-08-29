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

### 2. [Carpeta recetas](./recetas/)

Contiene un recetario con dos categorías:  

- 🟢 **Recetas saladas** (color verde claro)  
- 🟠 **Recetas dulces/postres** (color naranja)  

#### Archivos:
- [recetario](./recetas/index.php) → Página principal del recetario.  
- [detalle](./recetas/receta.php) → Muestra el detalle de cada receta.  
- [estilo paleta de colores](./recetas/css/) → Archivos de estilos (incluye la paleta de colores).  
- [imagenes](./recetas/img/) → Imágenes de apoyo para las recetas.  

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

### Opción 1: Usando servidor local (XAMPP, Laragon, WAMP, etc.)
1. Coloca todos los archivos en el servidor local (ej. `htdocs` de XAMPP o `www` de Laragon).  
2. Inicia el servidor Apache.  
3. Abre en el navegador:  
   - `http://localhost/index.php` → Gestión de empleados.  
   - `http://localhost/recetas/index.php` → Recetario.  
   - `http://localhost/pedido_pizzas.php` → Sistema de pedidos de pizza.

### Opción 2: Usando **Visual Studio Code (VSCode)**
1. Abre la carpeta del proyecto en **VSCode**.  
2. Instala las siguientes extensiones recomendadas:  
   - **PHP Server** (para ejecutar archivos PHP en localhost).  
   - **PHP Intelephense** (para autocompletado y soporte avanzado de PHP).  
   - **Live Server** (opcional, para pruebas rápidas en HTML/CSS dentro del recetario).  
3. Haz clic derecho sobre un archivo PHP y selecciona **"PHP Server: Serve Project"**.  
4. El navegador abrirá la ruta con la ejecución del archivo.  

---

## 📝 Notas adicionales

- El proyecto no utiliza base de datos, únicamente PHP y archivos `.txt` para almacenamiento del historial de pedidos.  
- Los estilos y colores están definidos en la carpeta **`recetas/css`**.  
- Las imágenes de apoyo deben almacenarse en la carpeta **`recetas/img`**.  

---

✍️ **Autor: Juan - TaskPro** Proyecto creado con fines educativos.  
