<?php
$tab = array("e1", "e2", "e3", "e4", "e5");
$dl = count($tab);
for($i=0; $i<$dl; $i++)
{
    echo $tab[$i], " ";
}
echo "<br>";

$tab1 = array(3, 8, 43, 10, 2, 9, 56);
echo "Tablica przed sortowaniem: ";
foreach ($tab1 as $x)
{
    echo "$x ";
}
echo "<br>";
sort($tab1);
echo "Tablica po sortowaniu: ";
foreach ($tab1 as $x)
{
    echo "$x ";
}

echo "<br>";
echo time();
echo "<br>";
echo "<br>";

//zadanie1
$tab1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$dl1 = count($tab1);
$parzyste = 0;
$nieparzyste = 0;
for ($i=0; $i<$dl1; $i++)
{
    if ($tab1[$i] % 2 == 0)
    {
        $parzyste++;
    }
    else
    {
        $nieparzyste++;
    }
}
echo "Liczby parzyste: " . $parzyste . "<br>";
echo "Liczby nieparzyste: " . $nieparzyste . "<br>";

$tablica = array
(
    "e1" : 6;
);
echo tablica["e1"];
?>