using System;

class Program
{
    static void Main()
    {
        bool continuar = true;

        while (continuar)
        {
            Console.WriteLine("\n=== Menú de Ejercicios ===");
            Console.WriteLine("1. Ejercicio Nombre y Ciudad");
            Console.WriteLine("2. Ejercicio Edad de una Persona");
            Console.WriteLine("3. Ejercicio Ocupaciones");
            Console.WriteLine("4. Salir");
            Console.Write("Seleccione una opción: ");

            string opcion = Console.ReadLine();

            switch (opcion)
            {
                case "1":
                    Ejercicio1App.Ejecutar();
                    break;
                case "2":
                    Ejercicio2App.Ejecutar();
                    break;
                case "3":
                    Ejercicio3App.Ejecutar();
                    break;
                case "4":
                    Console.WriteLine("Saliendo del programa...");
                    continuar = false;
                    break;
                default:
                    Console.WriteLine("Opción no válida. Intente de nuevo.");
                    break;
            }
        }
    }
}
