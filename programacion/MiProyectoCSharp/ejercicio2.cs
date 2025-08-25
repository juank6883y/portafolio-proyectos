using System;

public class Ejercicio2App
{
    public static void Ejecutar()
    {
        string opcion;
        do
        {
            Console.Write("Ingrese el nombre de la persona: ");
            string nombre = Console.ReadLine() ?? "";

            Console.Write("Ingrese la fecha de nacimiento (yyyy-mm-dd): ");
            if (DateTime.TryParse(Console.ReadLine(), out DateTime fechaNacimiento))
            {
                int edad = DateTime.Now.Year - fechaNacimiento.Year;
                if (DateTime.Now.DayOfYear < fechaNacimiento.DayOfYear)
                {
                    edad--;
                }
                Console.WriteLine($"{nombre} tiene {edad} años.");
            }
            else
            {
                Console.WriteLine("Formato inválido.");
            }

            Console.Write("¿Desea ingresar otra fecha? (S/N): ");
            opcion = (Console.ReadLine() ?? "N").ToUpper();

        } while (opcion != "N");

        Console.WriteLine("Programa finalizado.");
    }
}

