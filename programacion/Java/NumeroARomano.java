import java.util.Scanner;

public class NumeroARomano {

    // Valores decimales y sus equivalentes romanos extendidos con paréntesis
    private static final int[] VALORES = {1000000, 900000, 500000, 400000, 100000, 90000, 50000, 40000,
                                          10000, 9000, 5000, 4000,
                                          1000, 900, 500, 400,
                                          100, 90, 50, 40,
                                          10, 9, 5, 4, 1};

    private static final String[] SIMBOLOS = {"(M)", "(C)(M)", "(D)", "(C)(D)", "(C)", "(X)(C)", "(L)", "(X)(L)",
                                              "(X)", "M(X)", "(V)", "(IV)",
                                              "M", "CM", "D", "CD",
                                              "C", "XC", "L", "XL",
                                              "X", "IX", "V", "IV", "I"};

    // Método para convertir decimal a romano extendido
    public static String convertirARomano(int numero) {
        StringBuilder resultado = new StringBuilder();

        for (int i = 0; i < VALORES.length; i++) {
            while (numero >= VALORES[i]) {
                numero -= VALORES[i];
                resultado.append(SIMBOLOS[i]);
            }
        }

        return resultado.toString();
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        String opcion;

        do {
            System.out.print("Ingrese un número entero positivo: ");
            int numero = sc.nextInt();

            if (numero <= 0) {
                System.out.println("El número debe ser mayor que 0.");
            } else {
                System.out.println("Número romano: " + convertirARomano(numero));
            }

            System.out.print("¿Desea convertir otro número? (s/n): ");
            opcion = sc.next();

        } while (opcion.equalsIgnoreCase("s"));

        System.out.println("Programa finalizado. ¡Hasta luego!");
        sc.close();
    }
}
