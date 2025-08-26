# 🚀 Proyectos Java - Ejercicios Prácticos

Este repositorio contiene varios programas desarrollados en **Java** como parte de ejercicios prácticos para aprender **programación orientada a objetos**, estructuras de datos y lógica de programación.  

---

## 📂 Contenido del repositorio

### 1️⃣ [CalculoIMC.java](./CalculoIMC.java) 🧍‍♂️🧍‍♀️
Programa para calcular el **Índice de Masa Corporal (IMC)** de una persona.  

- Solicita: nombre completo, peso (kg) y estatura (m).  
- Calcula el IMC con la fórmula:
IMC = peso / (estatura * estatura)
- Determina la categoría de peso:  
- 🟥 Delgadez severa, moderada o leve  
- 🟩 Peso normal  
- 🟨 Sobrepeso  
- 🟫 Obesidad leve, moderada o mórbida  
- Permite evaluar **múltiples personas** y muestra un contador total de pacientes.

---

### 2️⃣ [Planeta.java](./Planeta.java) 🌍🪐
Clase que representa un **planeta del sistema solar**.  

- **Atributos:** nombre, satélites, masa, volumen, diámetro, distancia al Sol, tipo de planeta (GASEOSO, TERRESTRE, ENANO), observable a simple vista.  
- **Métodos:**  
- Mostrar información completa del planeta 🌟  
- Calcular densidad (`masa / volumen`) ⚖️  
- Determinar si es un planeta exterior 🚀  
- Incluye un **método main** que permite ingresar varios planetas y visualizar sus atributos y cálculos.

---

### 3️⃣ [Automovil.java](./Automovil.java) 🚗💨
Clase que representa un **automóvil** con atributos y funcionalidades avanzadas.  

- **Atributos:** marca, modelo, placa, motor, tipo de combustible, tipo de automóvil, puertas, asientos, velocidad máxima, color, velocidad actual, automático y multas.  
- **Métodos:**  
- Acelerar, desacelerar y frenar con control de velocidad máxima ⚠️  
- Generar multas si se excede la velocidad máxima 💸  
- Mostrar información completa del automóvil 📝  
- Permite ingresar **varios vehículos**, simular cambios de velocidad y mostrar un **resumen final** de todos los autos evaluados.

---

### 4️⃣ [MiPrograma.java](./MiPrograma.java) 🖥️
Archivo auxiliar que contiene otros ejercicios prácticos en Java.  

- Incluye **programas de prueba** y ejemplos de ejecución interactiva.  
- Sirve como apoyo para entender la ejecución de **clases y métodos**.

---

## 🏃‍♂️ Cómo ejecutar los programas

1. Asegúrate de tener **Java JDK** instalado y configurado.  
2. Compila el archivo `.java`:  
 ```bash
 javac NombreArchivo.java
```
3. Ejecuta el programa compilado:
```bash
java NombreArchivo
```
Ejemplo para el programa de Automóviles:
```bash
javac Automovil.java
java Automovil
```
## 🗂️ Estructura de carpetas recomendada
```
Java/
│
├─ CalculoIMC.java
├─ Planeta.java
├─ Automovil.java
└─ MiPrograma.java
```
✨ Autor  
Juan – Repositorio de ejercicios prácticos en Java 🖥️
