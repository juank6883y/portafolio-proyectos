import java.util.Scanner;
import java.util.Locale;

public class CalculoIMC {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        sc.useLocale(Locale.US); // usar punto como separador decimal

        String continuar;
        int contadorPacientes = 0; // contador de pacientes

        do {
            // Entrada de datos
            System.out.print("Ingrese nombre del paciente: ");
            String nombre = sc.nextLine(); // lee nombre completo (ej: Luis Fernando)

            System.out.print("Ingrese el peso en kilogramos: ");
            double peso = sc.nextDouble();
            sc.nextLine(); // limpiar salto de línea

            System.out.print("Ingrese la estatura en metros: ");
            double estatura = sc.nextDouble();
            sc.nextLine(); // limpiar salto de línea

            // Cálculo del IMC
            double imc = peso / (estatura * estatura);

            // Determinar clasificación
            String clasificacion;
            if (imc < 16) {
                clasificacion = "delgadez severa";
            } else if (imc >= 16 && imc < 17) {
                clasificacion = "delgadez moderada";
            } else if (imc >= 17 && imc < 18.5) {
                clasificacion = "delgadez leve";
            } else if (imc >= 18.5 && imc < 25) {
                clasificacion = "peso normal";
            } else if (imc >= 25 && imc < 30) {
                clasificacion = "sobrepeso";
            } else if (imc >= 30 && imc < 35) {
                clasificacion = "obesidad leve";
            } else if (imc >= 35 && imc < 40) {
                clasificacion = "obesidad moderada";
            } else {
                clasificacion = "obesidad mórbida";
            }

            // Resultados
            System.out.printf("IMC de %.2f%n", imc);
            System.out.printf("%s pesa %.1f kilogramos y su estatura es %.2f metros.%n", nombre, peso, estatura);
            System.out.printf("%s tiene %s.%n", nombre, clasificacion);

            // Incrementar contador
            contadorPacientes++;

            // Preguntar si desea continuar
            System.out.print("¿Desea ingresar otra persona para evaluar su IMC? (S/N): ");
            continuar = sc.nextLine();

        } while (continuar.equalsIgnoreCase("S"));

        // Mostrar total de pacientes evaluados
        System.out.println("Se evaluaron " + contadorPacientes + " pacientes en total.");
        System.out.println("Programa finalizado.");
        
        sc.close();
    }
}
