import java.util.Scanner;

// Enumerado para tipo de planeta
enum TipoPlaneta {
    GASEOSO,
    TERRESTRE,
    ENANO
}

public class Planeta {
    // Atributos
    String nombre = null;
    int cantidadSatelites = 0;
    double masa = 0; // en kilogramos
    double volumen = 0; // en km^3
    int diametro = 0; // en km
    int distanciaSol = 0; // distancia media al sol en millones de km
    TipoPlaneta tipo;
    boolean observable = false;

    // Constructor
    public Planeta(String nombre, int cantidadSatelites, double masa, double volumen,
                   int diametro, int distanciaSol, TipoPlaneta tipo, boolean observable) {
        this.nombre = nombre;
        this.cantidadSatelites = cantidadSatelites;
        this.masa = masa;
        this.volumen = volumen;
        this.diametro = diametro;
        this.distanciaSol = distanciaSol;
        this.tipo = tipo;
        this.observable = observable;
    }

    // Método para imprimir atributos
    public void mostrarInfo() {
        System.out.println("Nombre del planeta = " + nombre);
        System.out.println("Cantidad de satélites = " + cantidadSatelites);
        System.out.println("Masa del planeta = " + masa);
        System.out.println("Volumen del planeta = " + volumen);
        System.out.println("Diámetro del planeta = " + diametro);
        System.out.println("Distancia al sol = " + distanciaSol);
        System.out.println("Tipo de planeta = " + tipo);
        System.out.println("Es observable = " + observable);
    }

    // Calcular densidad
    public double calcularDensidad() {
        if (volumen != 0) {
            return masa / volumen;
        } else {
            return 0;
        }
    }

    // Determinar si es planeta exterior
    public boolean esExterior() {
        // Consideramos planeta exterior si está más allá del cinturón de asteroides (3.4 UA)
        double uaKm = 149_597_870; // 1 UA en km
        double limiteCinturonKm = 3.4 * uaKm; // límite superior cinturón asteroides
        double distanciaKm = distanciaSol * 1_000_000.0; // convertir millones de km a km
        return distanciaKm > limiteCinturonKm;
    }

    // Método main
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        sc.useLocale(java.util.Locale.US); // punto decimal
        String continuar;
        int contadorPlanetas = 0; // contador de planetas registrados

        do {
            // Pedir datos del planeta
            System.out.print("Nombre del planeta: ");
            String nombre = sc.nextLine();

            System.out.print("Cantidad de satélites: ");
            int satelites = sc.nextInt();

            System.out.print("Masa (en kilogramos): ");
            double masa = sc.nextDouble();

            System.out.print("Volumen (en km^3): ");
            double volumen = sc.nextDouble();

            System.out.print("Diámetro (en km): ");
            int diametro = sc.nextInt();

            System.out.print("Distancia al sol (millones de km): ");
            int distanciaSol = sc.nextInt();
            sc.nextLine(); // limpiar buffer

            System.out.print("Tipo de planeta (GASEOSO, TERRESTRE, ENANO): ");
            TipoPlaneta tipo = TipoPlaneta.valueOf(sc.nextLine().toUpperCase());

            System.out.print("Es observable a simple vista? (true/false): ");
            boolean observable = sc.nextBoolean();
            sc.nextLine(); // limpiar buffer

            // Crear objeto Planeta
            Planeta p = new Planeta(nombre, satelites, masa, volumen, diametro, distanciaSol, tipo, observable);

            // Mostrar info
            p.mostrarInfo();
            System.out.printf("Densidad del planeta = %.6f%n", p.calcularDensidad());
            System.out.println("Es planeta exterior = " + p.esExterior());

            // Incrementar contador
            contadorPlanetas++;

            // Preguntar si desea ingresar otro planeta
            System.out.print("¿Desea registrar otro planeta? (S/N): ");
            continuar = sc.nextLine();

        } while (continuar.equalsIgnoreCase("S"));

        // Mostrar total de planetas registrados
        System.out.println("Se registraron " + contadorPlanetas + " planetas en total.");
        System.out.println("Programa finalizado.");
        sc.close();
    }
}
