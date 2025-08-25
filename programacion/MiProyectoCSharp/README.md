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
Clase: **`Ejercicio1App`**  
Método: **`Ejecutar()`**  

Este ejercicio pide al usuario que ingrese su **nombre** y **ciudad**, luego muestra un saludo personalizado.  
Después, el programa pregunta si se desea ingresar otro nombre y ciudad, repitiendo el proceso hasta que el usuario responda **N**.  

Ejemplo de salida: 
```
Ingrese su nombre: Ana
Ingrese su ciudad: Madrid
Hola Ana de Madrid!
¿Desea ingresar otro nombre y ciudad? (S/N): N
Programa finalizado.
```

---

### 3. [Ejercicio2.cs](./ejercicio2.cs)
Clase: **`Ejercicio2App`**  
Método: **`Ejecutar()`**  

Este ejercicio solicita el **nombre** y la **fecha de nacimiento** de una persona en formato `yyyy-mm-dd`.  
El sistema calcula la **edad actual** de la persona y la muestra en pantalla.  
Permite repetir el proceso con diferentes datos hasta que el usuario elija salir con **N**.  

Ejemplo de salida:  
```
Ingrese el nombre de la persona: Juan
Ingrese la fecha de nacimiento (yyyy-mm-dd): 1990-05-12
Juan tiene 34 años.

¿Desea ingresar otra fecha? (S/N): N
Programa finalizado.
```

---

### 4. [Ejercicio3.cs](./ejercicio3.cs)
Clase: **`Ejercicio3App`**  
Método: **`Ejecutar()`**  

Este ejercicio muestra una **lista inicial de profesiones**.  
El usuario puede optar por **agregar nuevas profesiones**, las cuales se van sumando a la lista.  
El proceso se repite hasta que se responda **N**.  

Ejemplo de salida:  
```
Lista de ocupaciones/profesiones:

Médico
Ingeniero
Profesor
Artista
Abogado
Arquitecto
Carpintero
Chef
Programador
Músico

¿Desea agregar más profesiones? (S/N): S
Ingrese una nueva profesión: Piloto

Lista de ocupaciones/profesiones:

Médico
Ingeniero
Profesor
Artista
Abogado
Arquitecto
Carpintero
Chef
Programador
Músico
Piloto

¿Desea agregar más profesiones? (S/N): N

Programa finalizado.
```
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
