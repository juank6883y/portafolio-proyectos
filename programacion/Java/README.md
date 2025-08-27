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

### 5️⃣ [NumeroARomano.java](./NumeroARomano.java) 
Este proyecto en Java permite **convertir números decimales a números romanos**, sin límite de valor.  
Soporta tanto la notación clásica (hasta 3999) como una **notación extendida** con paréntesis para representar miles y múltiplos de mil, lo cual hace posible convertir números grandes como 10.000, 100.000 o incluso 1.000.000.

## ⚙️ Funcionamiento
1. El programa solicita al usuario un número entero positivo.  
2. Convierte el número a su representación en **números romanos** usando un sistema basado en valores y símbolos predefinidos.  
   - Ejemplo clásico: `586 → DLXXXVI`  
   - Ejemplo extendido: `4000 → (IV)` , `8079 → (V)(III)MLXXIX` , `1000000 → (M)`  
3. El sistema muestra el resultado en consola.  
4. Pregunta al usuario si desea ingresar otro número (`s` para continuar o `n` para salir).  
5. Repite el proceso hasta que el usuario decida terminar.

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
