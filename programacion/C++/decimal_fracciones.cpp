#include <iostream>
#include <sstream>
#include <limits>
using namespace std;

// Función para convertir fracción a decimal
double fraccionADecimal(const string &input) {
    if (input.find('/') != string::npos) {
        int numerador, denominador;
        char slash;
        stringstream ss(input);
        ss >> numerador >> slash >> denominador;
        if (denominador == 0) {
            cout << "Error: denominador no puede ser 0.\n";
            return 0;
        }
        return static_cast<double>(numerador) / denominador;
    } else { // Es un número decimal o entero
        double valor;
        stringstream ss(input);
        ss >> valor;
        return valor;
    }
}

int main() {
    char continuar = 'S';

    while (continuar == 'S' || continuar == 's') {
        int opcion;
        cout << "=== OPERACIONES ===\n";
        cout << "1. Operaciones con decimales\n";
        cout << "2. Operaciones con fracciones\n";
        cout << "Elige una opcion: ";
        cin >> opcion;
        cin.ignore(numeric_limits<streamsize>::max(), '\n'); // Limpiar buffer

        double a, b;
        string input1, input2;

        if (opcion == 1) { // Decimales
            cout << "Ingresa el primer numero (decimal o entero): ";
            cin >> a;
            cout << "Ingresa el segundo numero (decimal o entero): ";
            cin >> b;

        } else if (opcion == 2) { // Fracciones
            cout << "Ingresa el primer numero (fraccion o entero, ejemplo 1/3 o 2): ";
            cin >> input1;
            cout << "Ingresa el segundo numero (fraccion o entero, ejemplo 2/5 o 3): ";
            cin >> input2;
            a = fraccionADecimal(input1);
            b = fraccionADecimal(input2);

        } else {
            cout << "Opcion no valida.\n";
            continue;
        }

        cout << "\n=== Resultados ===\n";
        cout << "Suma: " << a + b << endl;
        cout << "Resta: " << a - b << endl;
        cout << "Multiplicacion: " << a * b << endl;
        if (b != 0)
            cout << "Division: " << a / b << endl;
        else
            cout << "Division: Error, no se puede dividir entre 0\n";

        cout << "\n¿Desea realizar otra operacion? (S/N): ";
        cin >> continuar;
        cin.ignore(numeric_limits<streamsize>::max(), '\n'); // Limpiar buffer
        cout << endl;
    }

    cout << "Programa finalizado.\n";
    return 0;
}
