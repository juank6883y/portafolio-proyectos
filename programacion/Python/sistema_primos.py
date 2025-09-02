from math import isqrt
import os

# --- Funciones previas ---
def es_primo(n):
    if n < 2: return False
    if n == 2: return True
    if n % 2 == 0: return False
    for d in range(3, isqrt(n) + 1, 2):
        if n % d == 0: return False
    return True

def cuenta_factores_primos(n):
    factores = set()
    d = 2
    while d * d <= n:
        if n % d == 0:
            if es_primo(d):
                factores.add(d)
            n //= d
        else:
            d += 1
    if n > 1 and es_primo(n):
        factores.add(n)
    return len(factores)

def condiciones_primo_personalizadas(n):
    return (
        es_primo(n)
        and n % 2 != 0
        and all(n % p != 0 for p in [3, 5, 7, 11])
        and cuenta_factores_primos(n) <= 2
        and n <= 10_000
    )

def generar_prefijos(primo, sufijo, base):
    sufijo_int = int(sufijo)
    pot10 = 10 ** len(sufijo)
    return [
        p for p in range(1, base)
        if (p * pot10 + sufijo_int) % primo == 0
    ]

def generar_rango_hasta(prefijo, base, limite):
    valores = []
    actual = prefijo
    while actual <= limite:
        valores.append(actual)
        actual += base
    return valores

print("=== Generador de prefijos divisibles ===\n")

ver_primos = input("¿Desea ver algún rango de números primos? (s/n): ").lower()
while ver_primos == 's':
    while True:
        try:
            inicio = int(input("Ingrese 1er dato: "))
            fin = int(input("Ingrese 2do dato: "))
            if inicio < 0 or fin < 0:
                print("❌ Solo puede ingresar números reales no negativos. Intenta de nuevo.")
                continue
            break
        except ValueError:
            print("❌ Solo puede ingresar números reales, no letras. Intenta de nuevo.")

    primos_en_rango = [x for x in range(inicio, fin + 1) if es_primo(x)]
    print(f"\nPrimos entre {inicio} y {fin}:\n{primos_en_rango}")

    ver_primos = input("\n¿Necesita otro rango de números primos? (s/n): ").lower()

while True:
    primo = int(input("Elige un número primo (condiciones especiales): "))
    while not condiciones_primo_personalizadas(primo):
        print("❌ Número inválido. Debe ser primo, impar, no divisible por 3/5/7/11, con ≤2 factores primos distintos y ≤10000.\n")
        primo = int(input("Elige un número primo (condiciones especiales): "))

    multiplicador = int(input(f"Elige el multiplicador para la base de {primo}: "))
    while multiplicador < 1 or multiplicador >= 100:
        print("❌ Solo puedes utilizar multiplicadores base desde 1 hasta 99.")
        multiplicador = int(input(f"Elige el multiplicador para la base de {primo}: "))

    base = primo * multiplicador

    color = "🔵" if multiplicador in [1,2,4,13,16,17,19,23,26,29,31,32,34,37,38,41,43,46,47,52,53,58,59,61,62,64,67,68,71,73,74,76,79,82,83,86,89,92,94,97] \
        else "🔴" if multiplicador in [3,6,9,12,15,18,27,36,39,45,48,51,54,57,69,78,81,87,93] \
        else "🟢" if multiplicador in [5,65,85,95] \
        else "🟣" if multiplicador in [7,14,28,35,49,91,98] \
        else "🟠" if multiplicador in [11,22,44,55] \
        else "💖" if multiplicador in [21,33,42,63,66,77,84,99] else "⚪"

    sufijo = input("Introduce el sufijo (solo dígitos, p. ej. 77): ")
    while not (sufijo.isdigit() and len(sufijo) == 2 and int(sufijo[-1]) % 2 != 0 and int(sufijo[-1]) != 5):
        print("❌ El sufijo debe tener exactamente 2 dígitos, no ser par ni terminar en 5.")
        sufijo = input("Introduce el sufijo (solo dígitos, p. ej. 77): ")

    print(f"\n→ Base generada: {primo} × {multiplicador} = {base} {color}")

    prefijos = generar_prefijos(primo, sufijo, base)
    print(f"\nPrefijos válidos ({len(prefijos)}):\n{prefijos}")

    seleccionados = []
    usar_prefijos = input("\n¿Deseas escoger prefijos de la secuencia? (s/n): ").lower()
    if usar_prefijos == 's':
        k = int(input(f"\n¿Cuántos prefijos deseas seleccionar? (1 – {len(prefijos)}): "))
        for i in range(k):
            p = int(input(f"Prefijo #{i+1}: "))
            while p not in prefijos:
                print("❌ Ese prefijo NO pertenece a la secuencia. Intenta de nuevo.\n")
                p = int(input(f"Prefijo #{i+1}: "))
            seleccionados.append(p)

        print(f"\nPrefijos seleccionados: {seleccionados}")
        rangos_guardar = []
        for p in seleccionados:
            limite = int(input(f"\n¿Hasta qué número te doy términos para el rango del prefijo {p}? "))
            r = generar_rango_hasta(p, base, limite)
            rangos_guardar.append((p, r))
            print(f"\nRango generado hasta {limite} para el prefijo {p}:")
            print(f"{p} = {r}")
            print(f"Total de términos: {len(r)}")

        guardar = input("\n¿Deseas guardar los rangos generados en un archivo .txt? (s/n): ").lower()
        if guardar == 's':
            nombre_archivo = input("¿Con qué nombre deseas guardar el archivo? (sin .txt): ") + ".txt"
            if os.path.exists(nombre_archivo):
                agregar = input("Ese archivo ya existe. ¿Deseas agregar esta información al archivo existente? (s/n): ").lower()
                modo = 'a' if agregar == 's' else 'w'
            else:
                modo = 'w'
            with open(nombre_archivo, modo) as f:
                for p, r in rangos_guardar:
                    f.write(f"Prefijo {p} = {r}\n")
            print(f"✅ Archivo '{nombre_archivo}' creado y guardado correctamente.")

        eliminar = input("\n¿Deseas eliminar algun archivo txt? (s/n): ").lower()
        if eliminar == 's':
            nombre_eliminar = input("Escribe el nombre exacto del archivo que deseas eliminar (sin .txt): ") + ".txt"
            while not os.path.exists(nombre_eliminar):
                print("❌ Ese archivo no existe, intenta otra vez.")
                nombre_eliminar = input("Escribe el nombre exacto del archivo que deseas eliminar (sin .txt): ") + ".txt"
            os.remove(nombre_eliminar)
            print(f"✅ Archivo '{nombre_eliminar}' eliminado correctamente.")

    crear_nuevo = input("\n¿Deseas crear un nuevo prefijo de rango? (s/n): ").lower()
    if crear_nuevo == 's':
        prefijo_base = int(input("Escoge cualquier prefijo de la secuencia: "))
        while prefijo_base not in prefijos:
            print("❌ Ese prefijo no está en la secuencia generada.")
            prefijo_base = int(input("Escoge cualquier prefijo de la secuencia: "))

        limite_base = int(input(f"¿Hasta qué número le genero el rango a {prefijo_base}?: "))
        rango_base = generar_rango_hasta(prefijo_base, base, limite_base)
        print(f"\n{prefijo_base} = {rango_base}")

        ultimo_valor_rango = rango_base[-1]
        nuevo_prefijo = int(input(f"Escribe el último número de ese rango, será tu nuevo prefijo de rango: "))
        while nuevo_prefijo != ultimo_valor_rango:
            print("❌ Ese no es tu nuevo prefijo de rango. Intenta otra vez.")
            nuevo_prefijo = int(input(f"Escribe el último número de ese rango, será tu nuevo prefijo de rango: "))

        crear_mas = input("\n¿Deseas crear más prefijos de rango? (s/n): ").lower()
        nuevos_prefijos = [nuevo_prefijo]
        if crear_mas == 's':
            cantidad_prefijos = int(input("¿Cuántos prefijos nuevos deseas crear?: "))
            actual_prefijo = nuevo_prefijo
            for _ in range(cantidad_prefijos):
                duracion_total = int(input("\nIngresa la duración total para el rango (en pasos de base): "))
                ultimo = actual_prefijo + duracion_total
                print(f"El último número del rango con esa duración sería: {ultimo}")

                cuantos = int(input("¿Cuántos valores deseas usar para el nuevo prefijo (1 a 3)? "))
                while cuantos < 1 or cuantos > 3:
                    print("❌ Solo puedes ingresar hasta 3 valores.")
                    cuantos = int(input("¿Cuántos valores deseas usar para el nuevo prefijo (1 a 3)? "))

                valores = []
                for j in range(cuantos):
                    valor = int(input(f"Valor #{j+1}: "))
                    operacion = input("¿Deseas sumarlo o restarlo al último número mostrado? (s/r): ").lower()
                    nuevo = ultimo + valor if operacion == 's' else ultimo - valor
                    valores.append(nuevo)

                print(f"\nNuevos posibles prefijos de rango: {valores}")
                seleccion = int(input("Escribe el nuevo prefijo de rango a usar: "))
                while seleccion not in valores:
                    print("❌ Ese no es tu nuevo número de rango, intenta de nuevo.")
                    seleccion = int(input("Escribe el nuevo prefijo de rango a usar: "))

                nuevos_prefijos.append(seleccion)
                actual_prefijo = seleccion

        rangos_guardar = []
        cuantos_ver = int(input(f"\n¿Cuántos de los nuevos prefijos de rango deseas ver? (1 - {len(nuevos_prefijos)}): "))
        for i in range(cuantos_ver):
            np = nuevos_prefijos[i]
            limite_np = int(input(f"Hasta qué número genero el rango para el nuevo prefijo {np}?: "))
            rnp = generar_rango_hasta(np, base, limite_np)
            print(f"\n{np} = {rnp}")
            rangos_guardar.append((np, rnp))

        guardar = input("\n¿Deseas guardar los rangos generados en un archivo .txt? (s/n): ").lower()
        if guardar == 's':
            nombre_archivo = input("¿Con qué nombre deseas guardar el archivo? (sin .txt): ") + ".txt"
            if os.path.exists(nombre_archivo):
                agregar = input("Ese archivo ya existe. ¿Deseas agregar esta información al archivo existente? (s/n): ").lower()
                modo = 'a' if agregar == 's' else 'w'
            else:
                modo = 'w'
            with open(nombre_archivo, modo) as f:
                for p, r in rangos_guardar:
                    f.write(f"Prefijo {p} = {r}\n")
            print(f"✅ Archivo '{nombre_archivo}' creado y guardado correctamente.")

        eliminar = input("\n¿Deseas eliminar algun archivo txt? (s/n): ").lower()
        if eliminar == 's':
            nombre_eliminar = input("Escribe el nombre exacto del archivo que deseas eliminar (sin .txt): ") + ".txt"
            while not os.path.exists(nombre_eliminar):
                print("❌ Ese archivo no existe, intenta otra vez.")
                nombre_eliminar = input("Escribe el nombre exacto del archivo que deseas eliminar (sin .txt): ") + ".txt"
            os.remove(nombre_eliminar)
            print(f"✅ Archivo '{nombre_eliminar}' eliminado correctamente.")

    repetir = input("\n¿Deseas utilizar otro número primo? (s/n): ").lower()
    if repetir != 's':
        print("\n¡Hasta la próxima!")
        break
