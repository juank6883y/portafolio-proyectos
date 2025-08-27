import java.util.Scanner;

// Enumerados
enum TipoCombustible { GASOLINA, BIOETANOL, DIESEL, BIODIESEL, GAS_NATURAL }
enum TipoAutomovil { CARRO_CIUDAD, SUBCOMPACTO, COMPACTO, FAMILIAR, EJECUTIVO, SUV }
enum Color { BLANCO, NEGRO, ROJO, NARANJA, AMARILLO, VERDE, AZUL, VIOLETA, GRIS }

public class Automovil {
    // Atributos
    private String marca;
    private int modelo;
    private String placa;
    private double motor;
    private TipoCombustible tipoCombustible;
    private TipoAutomovil tipoAutomovil;
    private int numPuertas;
    private int cantidadAsientos;
    private int velocidadMaxima;
    private Color color;
    private int velocidadActual;
    private boolean automatico;
    private int multas;

    // Contador estático de vehículos ingresados
    private static int contadorVehiculos = 0;

    // Constructor
    public Automovil(String marca, int modelo, String placa, double motor, TipoCombustible tipoCombustible,
                     TipoAutomovil tipoAutomovil, int numPuertas, int cantidadAsientos,
                     int velocidadMaxima, Color color, boolean automatico) {
        this.marca = marca;
        this.modelo = modelo;
        this.placa = placa;
        this.motor = motor;
        this.tipoCombustible = tipoCombustible;
        this.tipoAutomovil = tipoAutomovil;
        this.numPuertas = numPuertas;
        this.cantidadAsientos = cantidadAsientos;
        this.velocidadMaxima = velocidadMaxima;
        this.color = color;
        this.velocidadActual = 0;
        this.automatico = automatico;
        this.multas = 0;

        // Incrementar contador de vehículos
        contadorVehiculos++;
    }

    // Getters y Setters
    public int getVelocidadActual() { return velocidadActual; }
    public void setVelocidadActual(int velocidadActual) {
        if (velocidadActual <= velocidadMaxima && velocidadActual >= 0) {
            this.velocidadActual = velocidadActual;
        } else if (velocidadActual > velocidadMaxima) {
            System.out.println("No se puede exceder la velocidad máxima.");
            this.multas++;
        } else {
            System.out.println("No se puede asignar una velocidad negativa.");
        }
    }

    public boolean isAutomatico() { return automatico; }
    public void setAutomatico(boolean automatico) { this.automatico = automatico; }

    // Mostrar información
    public void mostrarInfo() {
        System.out.println("\n--- REPORTE DEL AUTOMÓVIL ---");
        System.out.println("Marca = " + marca);
        System.out.println("Modelo = " + modelo);
        System.out.println("Placa = " + placa);
        System.out.println("Motor = " + motor);
        System.out.println("Tipo de combustible = " + tipoCombustible);
        System.out.println("Tipo de automóvil = " + tipoAutomovil);
        System.out.println("Número de puertas = " + numPuertas);
        System.out.println("Cantidad de asientos = " + cantidadAsientos);
        System.out.println("Velocidad máxima = " + velocidadMaxima);
        System.out.println("Color = " + color);
        System.out.println("Velocidad actual = " + velocidadActual);
        System.out.println("Automático = " + automatico);
        System.out.println("Multas acumuladas = " + multas);
    }

    // Control de velocidad
    public void acelerar(int incremento) {
        if (velocidadActual + incremento <= velocidadMaxima) {
            velocidadActual += incremento;
        } else {
            velocidadActual = velocidadMaxima;
            multas++;
            System.out.println("¡Excediste la velocidad máxima! Se ha generado una multa.");
        }
        System.out.println("Velocidad actual = " + velocidadActual);
    }

    public void desacelerar(int decremento) {
        if (velocidadActual - decremento >= 0) {
            velocidadActual -= decremento;
        } else {
            velocidadActual = 0;
            System.out.println("No se puede decrementar a una velocidad negativa.");
        }
        System.out.println("Velocidad actual = " + velocidadActual);
    }

    public void frenar() {
        velocidadActual = 0;
        System.out.println("Velocidad actual = " + velocidadActual);
    }

    // Métodos de multas
    public boolean tieneMultas() { return multas > 0; }

    public double valorTotalMultas(double valorPorMulta) {
        return multas * valorPorMulta;
    }

    // Método para obtener total de vehículos ingresados
    public static int getTotalVehiculos() {
        return contadorVehiculos;
    }

    // Método main interactivo
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        sc.useLocale(java.util.Locale.US);
        String continuar;

        do {
            System.out.print("Ingrese marca: ");
            String marca = sc.nextLine();

            System.out.print("Ingrese modelo (año): ");
            int modelo = sc.nextInt();
            sc.nextLine();

            System.out.print("Ingrese placa: ");
            String placa = sc.nextLine();

            System.out.print("Ingrese motor (litros): ");
            double motor = sc.nextDouble();
            sc.nextLine();

            System.out.print("Tipo de combustible (GASOLINA, BIOETANOL, DIESEL, BIODIESEL, GAS_NATURAL): ");
            TipoCombustible tipoCombustible = TipoCombustible.valueOf(sc.nextLine().toUpperCase());

            System.out.print("Tipo de automóvil (CARRO_CIUDAD, SUBCOMPACTO, COMPACTO, FAMILIAR, EJECUTIVO, SUV): ");
            TipoAutomovil tipoAutomovil = TipoAutomovil.valueOf(sc.nextLine().toUpperCase());

            System.out.print("Número de puertas: ");
            int numPuertas = sc.nextInt();

            System.out.print("Cantidad de asientos: ");
            int cantidadAsientos = sc.nextInt();

            System.out.print("Velocidad máxima: ");
            int velocidadMaxima = sc.nextInt();
            sc.nextLine();

            System.out.print("Color (BLANCO, NEGRO, ROJO, NARANJA, AMARILLO, VERDE, AZUL, VIOLETA, GRIS): ");
            Color color = Color.valueOf(sc.nextLine().toUpperCase());

            System.out.print("¿Es automático? (true/false): ");
            boolean automatico = sc.nextBoolean();
            sc.nextLine();

            // Crear automóvil
            Automovil auto = new Automovil(marca, modelo, placa, motor, tipoCombustible,
                    tipoAutomovil, numPuertas, cantidadAsientos, velocidadMaxima, color, automatico);

            // Mostrar reporte
            auto.mostrarInfo();

            // Simulación de velocidad
            System.out.println("\nSimulación de velocidad:");
            auto.setVelocidadActual(100);
            System.out.println("Velocidad actual = " + auto.getVelocidadActual());

            auto.acelerar(20);
            auto.desacelerar(50);
            auto.frenar();

            // Mostrar multas
            if (auto.tieneMultas()) {
                System.out.println("Este vehículo tiene " + auto.multas + " multa(s).");
                System.out.println("Valor total de multas (suponiendo 50 por multa) = $" + auto.valorTotalMultas(50));
            } else {
                System.out.println("Este vehículo no tiene multas.");
            }

            // Preguntar si desea ingresar otro automóvil
            System.out.print("\n¿Desea ingresar otro automóvil? (S/N): ");
            continuar = sc.nextLine();

        } while (continuar.equalsIgnoreCase("S"));

        // Resumen final
        System.out.println("\n--- RESUMEN FINAL ---");
        System.out.println("Se registraron " + Automovil.getTotalVehiculos() + " vehículo(s) en total.");

        System.out.println("Programa finalizado.");
        sc.close();
    }
}
