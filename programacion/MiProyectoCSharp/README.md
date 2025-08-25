# 📌 MiProyectoCSharp

Este repositorio contiene un conjunto de ejercicios básicos de programación en **C#**, organizados dentro de un solo proyecto de consola.  
Cada archivo tiene una funcionalidad específica y se integra con el menú principal definido en `Program.cs`.

---

## 🚀 Archivos del proyecto

### 1. [Program.cs](./Program.cs)
Archivo principal que controla la ejecución del programa.  
Contiene el **menú interactivo** que permite al usuario seleccionar qué ejercicio ejecutar:  

- Ejercicio 1  
- Ejercicio 2  
- Ejercicio 3  
- Salir  

Ejemplo de inicio del programa:  

Seleccione una opción:

1. Ejecutar Ejercicio 1
2. Ejecutar Ejercicio 2
3. Ejecutar Ejercicio 3
4. Salir

---

### 2. [Ejercicio1.cs](./ejercicio1.cs)
Este archivo contiene la clase `Ejercicio1App` con su método `Ejecutar()`.  
Su propósito es practicar la **entrada de datos y operaciones básicas** en C#.  
Ejemplo: pedir al usuario un número y mostrar si es positivo o negativo.

---

### 3. [Ejercicio2.cs](./ejercicio2.cs)
Archivo con la clase `Ejercicio2App`.  
Implementa un ejercicio relacionado con **estructuras de control (if, else, switch)**.  
Ejemplo: ingresar un número y determinar si es **par o impar**.

---

### 4. [Ejercicio3.cs](./ejercicio3.cs)
Archivo con la clase `Ejercicio3App`.  
Se enfoca en **bucles y repetición**.  
Ejemplo: mostrar en pantalla los primeros **N números de la serie Fibonacci** o contar del 1 al 10.

---

## 🛠️ Requisitos
- .NET SDK instalado ([descargar aquí](https://dotnet.microsoft.com/en-us/download))  
- Editor recomendado: **Visual Studio Code** o **Visual Studio Community**

---

## ▶️ Cómo ejecutar el proyecto
1. Clonar este repositorio:  
   ```bash
   git clone https://github.com/usuario/MiProyectoCSharp.git
   cd MiProyectoCSharp
   ```

2. Compilar el proyecto:
   ```bash
   dotnet build
   ```
3. Ejecutar:
   ```bash
   dotnet run
   ```
📚 Notas
Cada ejercicio está encapsulado en su propia clase con un método Ejecutar().
El menú en Program.cs permite acceder a ellos sin tener que cambiar el código manualmente.
Puedes expandir el proyecto añadiendo nuevos archivos como Ejercicio4.cs, Ejercicio5.cs, etc.

✍️ Autor: Juan[TaskPro]
