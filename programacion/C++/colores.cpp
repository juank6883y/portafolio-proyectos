#include <iostream>
#include <windows.h>
using namespace std;

void cambiarColor(int color) {
    HANDLE hConsole = GetStdHandle(STD_OUTPUT_HANDLE);
    SetConsoleTextAttribute(hConsole, color);
}

int main() {
    char continuar = 'S';
    int colores[] = {12, 10, 14, 9, 15};  // Rojo, Verde, Amarillo, Azul, Blanco
    int nColores = 5;

    cout << "=== DEMO DE COLORES EN CONSOLA ===\n";

    while (continuar == 'S' || continuar == 's') {
        string texto;
        cout << "\nIngresa un texto: ";
        getline(cin, texto);

        cout << "\nTexto en colores:\n";
        for (int i = 0; i < nColores; i++) {
            cambiarColor(colores[i]);
            cout << texto << endl;
        }

        cambiarColor(7); // Restaurar color a blanco

        cout << "\n¿Desea ingresar otro texto? (S/N): ";
        cin >> continuar;
        cin.ignore(1000, '\n'); // Limpiar buffer para el siguiente getline
    }

    cout << "\nPrograma finalizado.\n";
    return 0;
}
