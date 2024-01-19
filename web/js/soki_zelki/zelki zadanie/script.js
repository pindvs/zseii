function zamow()
{
    var ksztalt = document.getElementById("nrKsztaltu").value;
    var wypiszKsztalt = document.getElementById("ksztalt");

    if(ksztalt == 1)
    {
        wypiszKsztalt.innerHTML += "miś";
    }
    else if(ksztalt == 2)
    {
        wypiszKsztalt.innerHTML += "żabka";
    }
    else if(ksztalt == 3)
    {
        wypiszKsztalt.innerHTML += "serce";
    }
    else
    {
        wypiszKsztalt.innerHTML += "inny";
    }

    var kolor = [
        document.getElementById("r").value,
        document.getElementById("g").value,
        document.getElementById("b").value,
    ];
    var przyciskKolor = dokument.getElementById("kolor");
    przyciskKolor.style.backgroundColor = "rgb(" + kolor[0] + "," + kolor[1] + "," + kolor[2] + ")";
}