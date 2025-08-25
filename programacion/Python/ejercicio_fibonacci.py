"""
Exercise 2: Fibonacci Sequence / Ejercicio 2: Secuencia de Fibonacci

Create a program that prints the first N numbers of the Fibonacci sequence.
Crea un programa que muestre los primeros N números de la secuencia de Fibonacci.
"""

# English version
while True:
    n = int(input("Enter the number of terms: "))
    a, b = 0, 1
    fibonacci = []
    for _ in range(n):
        fibonacci.append(a)
        a, b = b, a + b
    print("Fibonacci sequence:", ", ".join(map(str, fibonacci)))

    again = input("Do you want to see more Fibonacci numbers? (Y/N): ").strip().lower()
    if again == "n":
        print("Program finished. Goodbye!")
        break

# Spanish version (commented)
# while True:
#     n = int(input("Ingresa la cantidad de términos: "))
#     a, b = 0, 1
#     fibonacci = []
#     for _ in range(n):
#         fibonacci.append(a)
#         a, b = b, a + b
#     print("Secuencia de Fibonacci:", ", ".join(map(str, fibonacci)))
#
#     otra = input("¿Deseas ver más números de Fibonacci? (S/N): ").strip().lower()
#     if otra == "n":
#         print("Programa terminado. ¡Adiós!")
#         break

