<?php
function trojkat($a, $h)
{
    echo "Pole trojkata o podstawie $a i wysokosci $h wynosi: ".(($a*$h)/2);
}

function prostokat($a, $b)
{
    echo "Pole prostokata o bokach $a i $b wynosi: ".($a*$b);
}

function trapez($a, $h, $b)
{
    $p = (($a+$b)*$h)/2;
    echo "Pole trapezu o bokach $a i $b oraz wysokosci $h wynosi: ".$p;
}
function kolo($r)
{
    $p = 3.14*$r*$r;
    echo "Pole koła o promieniu $r wynosi: ".$p;
}
?>