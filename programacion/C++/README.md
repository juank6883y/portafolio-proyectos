# Ejercicios en C++

Este repositorio contiene varios ejercicios prácticos desarrollados en **C++**, con el objetivo de practicar operaciones básicas, manejo de colores en consola, trabajo con fracciones y decimales, números ordinales y números primos.  

---

## Contenido del repositorio

### 1. [Calculadora básica](./calculadora_basica.cpp)
- **Descripción:** Calculadora básica que permite realizar operaciones de suma, resta, multiplicación, división, elevar un número y calcular raíces cuadradas.  
- **Características principales:**
  - Funciona con números enteros y decimales.
  - Permite continuar realizando operaciones hasta que el usuario decida salir.
  - Manejo de división entre cero.
  - Formato de salida sin decimales cuando el resultado es exacto.

---

### 2. [Colores en consola](./colores.cpp)
- **Descripción:** Demo de colores en consola que permite ingresar cualquier texto y mostrarlo en diferentes colores.  
- **Características principales:**
  - Colores disponibles: rojo, verde, amarillo, azul y blanco.
  - Permite ingresar múltiples textos hasta que el usuario decida terminar.
  - Utiliza la API de Windows para cambiar el color de la consola.

---

### 3. [Operaciones con decimales y fracciones](./decimal_fracciones.cpp)
- **Descripción:** Programa que realiza operaciones matemáticas (suma, resta, multiplicación, división) con **decimales y fracciones**.  
- **Características principales:**
  - Permite ingresar fracciones en formato `numerador/denominador` o decimales.
  - Convierte automáticamente fracciones a decimal para realizar operaciones.
  - Permite continuar realizando operaciones hasta que el usuario decida salir.
  - Manejo de división por cero y validación de denominador.

---

### 4. [Números ordinales](./ordinales.cpp)
- **Descripción:** Convierte números enteros del 1 al 99 a su **nombre ordinal completo en español**.  
- **Características principales:**
  - Ejemplos: `4 → cuarto`, `14 → decimocuarto`, `65 → sexagésimo quinto`.
  - Evita caracteres extraños mediante UTF-8 en la consola.
  - Permite ingresar varios números consecutivos hasta que el usuario decida salir.
  - Para números fuera de rango muestra mensaje de advertencia (`fuera de rango`).

---

### 5. [Rango de números primos](./rango_primos.cpp)
- **Descripción:** Muestra todos los números primos dentro de un rango definido por el usuario.  
- **Características principales:**
  - Permite ingresar un rango `desde` y `hasta`.
  - Muestra los números primos **entre corchetes y separados por comas**.
  - Permite consultar múltiples rangos consecutivos hasta que el usuario decida terminar.
  - Utiliza funciones eficientes para verificar primalidad.

---

## Requisitos
- **Compilador C++** compatible con C++11 o superior (ej. GCC, Clang, Visual Studio).  
- **Sistema operativo:** Windows (para `colores.cpp` se usa API de Windows para cambiar colores).  
- Para otros archivos, funciona en cualquier sistema que soporte C++ estándar.

---

## Cómo usar
1. Clonar o descargar el repositorio.
2. Compilar el archivo deseado. Por ejemplo:

```bash
g++ calculadora_basica.cpp -o calculadora
./calculadora
```

3. Seguir las instrucciones que aparecen en consola para cada programa.

---

## Autor

- Juan (TaskPro)
- +57 3202646321
