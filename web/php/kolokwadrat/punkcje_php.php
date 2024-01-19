<?php
$x = 5;
$y = 3;
$z = 9;
function wyrazenie($x, $y, $z)
{
    $wynik = 2 * $x - 0.5 * $y + $z / 2;
    echo "Wartosc wyrazenia dla liczb $x, $y, $z wynosi: " . $wynik;
    return $wynik . "<br>";
}
echo wyrazenie($x, $y, $z);

function pole($x)
{
    $pole = $x * $x;
    echo "Pole kwadratu o boku $x wynosi " . $pole . ".";
}
pole(5);

function zwieksz_liczbe($x)
{
    $x += 6;
    return $x;
}
$x = 5;

echo "<br>" . "Przed - x: " . $x . "<br>";
echo "Po zwiekszeniu - x: " . zwieksz_liczbe($x) . "<br>";
echo "Po wywolaniu funkcji - x: " . $x . "<br>";

$x = 7;
function pole1()
{
    $x = $GLOBALS['x'];
    $pole = $x * $x;
    echo "Pole kwadratu o boku $x wynosi " . $pole;
}
pole1();

function pole_trojkata($x = 5, $y = 6)
{
    return ($x * $y) / 2;
}

$pole1 = pole_trojkata();
echo "<br>Funkcja z argumentami domyslnymi daje wartosc: " . $pole1;

$pole1 = pole_trojkata(8, 3);
echo "<br>Funkcja z argumentami nadanymi daje wartosc: " . $pole1;


?>