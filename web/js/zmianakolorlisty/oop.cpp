#include <iostream>
using namespace std;

class Kot{
private:
    string imie;
    string kolor;
    int wiek;
    int waga;
public:
    Kot(string imie, string kolor, int wiek, int waga) 
    {
        this->imie = imie;
        this->kolor = kolor;
        this->wiek = wiek;
        this->waga = waga;

    }
    void WpiszDane(){
        cout << "Imie: " << this->imie << "\nKolor: " << this->kolor << "\nWiek: " << this->wiek << "\nWaga: " << this->waga << "\n";

    }

};

int main()
{
    setlocale(LC_ALL, "");
    
    Kot Nowy ('Pepa', 'Ruda', 6, 5);
    Nowy.WpiszDane()

    return 0; 
} 
