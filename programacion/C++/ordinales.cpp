#include <iostream>
#include <string>
#include <limits>   // <<--- necesario para numeric_limits
#include <windows.h>
using namespace std;

// Nombres de unidades y decenas para ordinales
string unidades(int n) {
    switch(n) {
        case 1: return "primero";
        case 2: return "segundo";
        case 3: return "tercero";
        case 4: return "cuarto";
        case 5: return "quinto";
        case 6: return "sexto";
        case 7: return "séptimo";
        case 8: return "octavo";
        case 9: return "noveno";
        default: return "";
    }
}

string especiales(int n) { // 10-19
    switch(n) {
        case 10: return "décimo";
        case 11: return "undécimo";
        case 12: return "duodécimo";
        case 13: return "decimotercero";
        case 14: return "decimocuarto";
        case 15: return "decimoquinto";
        case 16: return "decimosexto";
        case 17: return "decimoséptimo";
        case 18: return "decimoctavo";
        case 19: return "decimonoveno";
        default: return "";
    }
}

string decenas(int n) {
    switch(n) {
        case 20: return "vigésimo";
        case 30: return "trigésimo";
        case 40: return "cuadragésimo";
        case 50: return "quincuagésimo";
        case 60: return "sexagésimo";
        case 70: return "septuagésimo";
        case 80: return "octogésimo";
        case 90: return "nonagésimo";
        default: return "";
    }
}

// Función principal para convertir número a ordinal hasta 99
string numeroOrdinal(int n) {
    if(n <= 0 || n > 99) return to_string(n) + " → fuera de rango";

    if(n <= 9) return to_string(n) + " → " + unidades(n);
    if(n >= 10 && n <= 19) return to_string(n) + " → " + especiales(n);

    int d = (n / 10) * 10; // decena
    int u = n % 10;        // unidad

    if(u == 0) return to_string(n) + " → " + decenas(d);
    else return to_string(n) + " → " + decenas(d) + " " + unidades(u);
}

int main() {
    // Activar UTF-8 en consola Windows
    SetConsoleOutputCP(CP_UTF8);
    SetConsoleCP(CP_UTF8);

    char continuar = 'S';

    while (continuar == 'S' || continuar == 's') {
        int numero;
        cout << "Ingresa un numero (1-99): ";
        cin >> numero;

        cout << numeroOrdinal(numero) << endl;

        cout << "\n¿Desea ingresar otro numero? (S/N): ";
        cin >> continuar;
        cin.ignore(std::numeric_limits<std::streamsize>::max(), '\n'); // Limpiar buffer
        cout << endl;
    }

    cout << "Programa finalizado.\n";
    return 0;
}
