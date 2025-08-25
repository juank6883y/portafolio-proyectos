using System;

public class Ejercicio1App
{
    public static void Ejecutar()
    {
        string continuar;
        do
        {
            Console.Write("Ingrese su nombre: ");
            string nombre = Console.ReadLine() ?? "Desconocido";

            Console.Write("Ingrese su ciudad: ");
            string ciudad = Console.ReadLine() ?? "Sin ciudad";

            Console.WriteLine($"\nHola {nombre} de {ciudad}!");

            Console.Write("\n¿Desea ingresar otro nombre y ciudad? (S/N): ");
            continuar = Console.ReadLine()?.Trim().ToUpper() ?? "N";

            Console.WriteLine(); // línea en blanco para separar

        } while (continuar == "S");
    }
}
