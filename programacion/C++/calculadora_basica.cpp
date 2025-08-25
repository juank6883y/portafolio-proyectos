#include <iostream>
#include <cmath>
#include <iomanip>  // Para fixed y setprecision
using namespace std;

int main() {
    int opcion;
    double a, b;

    char continuar = 'S';

    while (continuar == 'S' || continuar == 's') {
        cout << "=== CALCULADORA BASICA ===\n";
        cout << "1. Suma\n";
        cout << "2. Resta\n";
        cout << "3. Multiplicacion\n";
        cout << "4. Division\n";
        cout << "5. Elevar un numero\n";
        cout << "6. Raiz cuadrada\n";
        cout << "Elige una opcion: ";
        cin >> opcion;

        if (opcion >= 1 && opcion <= 4) {
            cout << "Ingresa el primer numero: ";
            cin >> a;
            cout << "Ingresa el segundo numero: ";
            cin >> b;
        } else if (opcion == 5 || opcion == 6) {
            cout << "Ingresa el numero: ";
            cin >> a;
        }

        switch (opcion) {
            case 1: 
                cout << "Resultado: " << fixed << setprecision(0) << a + b << endl; 
                break;
            case 2: 
                cout << "Resultado: " << fixed << setprecision(0) << a - b << endl; 
                break;
            case 3: 
                cout << "Resultado: " << fixed << setprecision(0) << a * b << endl; 
                break;
            case 4: 
                if (b != 0) {
                    double resultado = a / b;
                    if (fmod(a, b) == 0)  // División exacta
                        cout << "Resultado: " << fixed << setprecision(0) << resultado << endl;
                    else
                        cout << "Resultado: " << fixed << setprecision(5) << resultado << endl;
                } else {
                    cout << "Error: No se puede dividir entre 0\n";
                }
                break;
            case 5: {
                int exp;
                cout << "¿A qué potencia deseas elevar el numero?: ";
                cin >> exp;
                cout << "Resultado: " << fixed << setprecision(0) << pow(a, exp) << endl;
                break;
            }
            case 6: 
                if (a >= 0)
                    cout << "Resultado: " << fixed << setprecision(0) << sqrt(a) << endl;
                else
                    cout << "Error: No existe raiz cuadrada real de un numero negativo\n";
                break;
            default: 
                cout << "Opcion no valida\n";
        }

        cout << "\n¿Desea realizar otra operacion? (S/N): ";
        cin >> continuar;
        cout << endl;
    }

    cout << "Programa finalizado.\n";
    return 0;
}
