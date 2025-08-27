using System;
using System.Collections.Generic;

public class Ejercicio3App
{
    public static void Ejecutar()
    {
        List<string> profesiones = new List<string>
        {
            "Médico", "Ingeniero", "Profesor", "Artista",
            "Abogado", "Arquitecto", "Carpintero", "Chef",
            "Programador", "Músico"
        };

        string opcion;
        do
        {
            Console.WriteLine("\nLista de ocupaciones/profesiones:");
            foreach (string profesion in profesiones)
            {
                Console.WriteLine($"- {profesion}");
            }

            Console.Write("\n¿Desea agregar más profesiones? (S/N): ");
            opcion = (Console.ReadLine() ?? "N").ToUpper();

            if (opcion == "S")
            {
                Console.Write("Ingrese una nueva profesión: ");
                string nuevaProfesion = Console.ReadLine() ?? "";
                if (!string.IsNullOrWhiteSpace(nuevaProfesion))
                {
                    profesiones.Add(nuevaProfesion);
                }
            }

        } while (opcion == "S");

        Console.WriteLine("\nPrograma finalizado.");
    }
}
