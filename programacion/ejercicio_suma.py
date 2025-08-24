"""
Exercise 1: Sum of Two Numbers / Ejercicio 1: Suma de Dos Números

This program asks the user for two numbers, prints their sum,
and asks if they want to perform another sum.
El programa pide al usuario dos números, muestra su suma
y pregunta si desea realizar otra suma.
"""

# --- English version ---
while True:
    num1 = int(input("Enter the first number: "))
    num2 = int(input("Enter the second number: "))
    total = num1 + num2
    print("The sum is", total)
    
    again = input("Do you want to sum another pair of numbers? (y/n): ").lower()
    if again != 'y':
        print("Goodbye!")
        break

# --- Spanish version ---
# while True:
#     num1 = int(input("Ingresa el primer número: "))
#     num2 = int(input("Ingresa el segundo número: "))
#     total = num1 + num2
#     print("La suma es", total)
#     
#     otra = input("¿Deseas sumar otro par de números? (s/n): ").lower()
#     if otra != 's':
#         print("¡Adiós!")
#         break
