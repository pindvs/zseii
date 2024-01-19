#include <iostream>
 
using namespace std;
 
class Produkt {
private:
    string nazwa;
    int cena;
    int ilosc;
public:
    Produkt(string nazwa, int cena, int ilosc) {
        this->nazwa = nazwa;
        this->cena = cena;
        this->ilosc = ilosc;
    }
    
void WpiszDane()
{
    cout << "Wprowadz nazwe produktu: " << this->nazwa << "\nNapisz cene produktu za kilogram: " << this->cena << "\nIle towaru (kg) mamay? Napisz: " << this->ilosc << "\n";
}
};
 
int main()
{
    setlocale(LC_ALL, "");
    Produkt Nowy("pomidor", 5, 100);
    Nowy.WpiszDane();
 
    return 0;
}