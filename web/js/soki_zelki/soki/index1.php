<?php

$firma = $_POST['firma'];
$smak = $_POST['smak'];
$ilosc = $_POST['ilosc'];

switch($firma)
{
    case 'Tymbark':
        echo 'Wybrales: ' . $firma . ' o smaku ' . $smak . ' w butelce o pojemnosci ' . $ilosc;
        if($ilosc=='500ml')
        {
            echo "Cena: 5zl";
        }
        elseif($ilosc=='750ml')
        {
            echo "Cena: 6zl";
        }
        elseif($ilosc=='1l')
        {
            echo "Cena: 7zl";
        }
        elseif($ilosc=='2l')
        {
            echo "Cena: 14zl";
        }
        else
        {
            echo "Zla wartosc!"
        };
    break;
        
    case 'Hortex':
        echo "Wybrales: " . $firma . " o smaku " . $smak . " w butelce o pojemnosci " . $ilosc;
        if ($ilosc == '500ml')
        {
            echo "Cena: 6zl"
        }
        elseif ($ilosc == '750ml')
        {
            echo "Cena: 7zl"
        }
        elseif ($ilosc == '1l')
        {
            echo "Cena: 9zl"
        }
        elseif ($ilosc == '2l')
        {
            echo "Cena: 18zl"
        }
        else{
            echo "Zla wartosc!"
        };
        break;

        case 'Riviva':
            echo "Wybrales: " . $firma . " o smaku " . $smak . " w butelce o pojemnosci " . $ilosc;
             if ($ilosc == '500ml')
            {
                echo "Cena: 5zl"
            }
            elseif ($ilosc == '750ml')
            {
                echo "Cena: 6zl"
            }
            elseif ($ilosc == '1l')
            {
                echo "Cena: 7,50zl"
            }
            elseif ($ilosc == '2l')
            {
                echo "Cena: 15zl"
            }
            else{
                echo "Zla wartosc!"
            };
            break;

            case 'Riviva':
                echo "Wybrales: " . $firma . " o smaku " . $smak . " w butelce o pojemnosci " . $ilosc;
                if ($ilosc == '500ml')
                {
                    echo "Cena: 5zl"
                }
                elseif ($ilosc == '750ml')
                {
                    echo "Cena: 6zl"
                }
                elseif ($ilosc == '1l')
                {
                    echo "Cena: 7,50zl"
                }
                elseif ($ilosc == '2l')
                {
                    echo "Cena: 15zl"
                }
                else{
                    echo "Zla wartosc!"
                };
                break;

                case 'Riviva':
                    echo "Wybrales: " . $firma . " o smaku " . $smak . " w butelce o pojemnosci " . $ilosc;
                    if ($ilosc == '500ml')
                    {
                        echo "Cena: 3zl"
                    }
                    elseif ($ilosc == '750ml')
                    {
                        echo "Cena: 4zl"
                    }
                    elseif ($ilosc == '1l')
                    {
                        echo "Cena: 5.50zl"
                    }
                    elseif ($ilosc == '2l')
                    {
                        echo "Cena: 11zl"
                    }
                    else{
                        echo "Zla wartosc!"
                    };
                    break;
    }
?>