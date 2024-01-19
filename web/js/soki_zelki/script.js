function oblicz(){
    var a,h, wynik;
    a = document.getElementById("a").value;
    h = document.getElementById("h").value;
    wynik = a*h/2;
    document.getElementById("wynik").innerHTML = "Pole wynosi " + wynik;
}
function over()
{
    document.getElementById("div").style.border = "3px red solid";
}
function out()
{
    document.getElementById("div").style.border = "3px blue dotted";
}