"""
Exercise 3: Palindrome Checker / Ejercicio 3: Comprobador de Palíndromos

Write a program that checks if a given word or phrase is a palindrome.
Escribe un programa que compruebe si una palabra o frase dada es un palíndromo.
"""

# English version
while True:
    text = input("Enter a word or phrase: ").replace(" ", "").lower()
    if text == text[::-1]:
        print(f"'{text}' is a palindrome")
    else:
        print(f"'{text}' is not a palindrome")

    again = input("Do you want to check another word or phrase? (Y/N): ").strip().lower()
    if again == "n":
        print("Program terminated.")
        break

# Spanish version
# while True:
#     texto = input("Ingresa una palabra o frase: ").replace(" ", "").lower()
#     if texto == texto[::-1]:
#         print(f"'{texto}' es un palíndromo")
#     else:
#         print(f"'{texto}' no es un palíndromo")
#
#     otra = input("¿Deseas comprobar otra palabra o frase? (S/N): ").strip().lower()
#     if otra == "n":
#         print("Programa terminado.")
#         break
[⬅ Back to Exercises Index](README.md)
