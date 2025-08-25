#include <iostream>
using namespace std;

bool esPrimo(int n) {
    if (n <= 1) return false;
    for (int i = 2; i * i <= n; i++) {
        if (n % i == 0) return false;
    }
    return true;
}

int main() {
    char continuar = 'S';

    while (continuar == 'S' || continuar == 's') {
        int inicio, fin;
        cout << "Mostrar numeros primos desde: ";
        cin >> inicio;
        cout << "Hasta: ";
        cin >> fin;

        cout << "Numeros primos: [";
        bool primero = true; // Para controlar la coma
        for (int i = inicio; i <= fin; i++) {
            if (esPrimo(i)) {
                if (!primero) cout << ", ";
                cout << i;
                primero = false;
            }
        }
        cout << "]" << endl;

        cout << "\n¿Desea ingresar otro rango de numeros primos? (S/N): ";
        cin >> continuar;
        cout << endl;
    }

    cout << "Programa finalizado.\n";
    return 0;
}
