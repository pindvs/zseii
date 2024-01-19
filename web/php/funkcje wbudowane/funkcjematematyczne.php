<?php
$a = pi();

echo "round: " . round($a) . "<br>";
echo "floor: " . floor($a) . "<br>";
echo "ceil: " . ceil($a) . "<br>";

echo "----------<br>";

echo "abs: " . abs(-2) . "<br>";
echo "min: " . min(1, 2, -1, -100) . "<br>";
echo "max: " . max(1, 2, -1, -100) . "<br>";
echo "rand: " . rand(1,100) . "<br>";
echo "sqrt: " . sqrt(25) . "<br>";
echo "tangens: " . tan(13) . "<br>";
echo "pow: " . pow(2,2) . "<br>";
echo "octdec: " . octdec(127) . "<br>";
echo "fmod: " . fmod(2333,5) . "<br>";
echo "hexdec: " . hexdec("F") . "<br>";

echo "----------<br>";

$a1 = "Dowolny tekst";
echo "mb_strlen: " . mb_strlen($a1) . "<br>";
echo "strtoupper: " . strtoupper($a1) . "<br>";
echo "mb_strtoupper: " . mb_strtoupper($a1) . "<br>";
echo "strtolower: " . strtolower($a1) . "<br>";

echo "----------<br>";

$a2 = "     Jakiś tekst     ";
echo "trim: " . trim($a2) . "<br>";
echo "str_replace: " . str_replace("k", "8", $a2) . "<br>";
?>