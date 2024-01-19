function wycen()
{
    var cena=document.getElementById("wybor").value;  
    
    switch(cena)
    {
        case A: var cena=document.getElementById("div").innerHTML = "Cena Twojego koszyka wynosi: " + cena + "zł.";     
        break;
        case B: var cena=document.getElementById("div").innerHTML = "Cena Twojego koszyka wynosi: " + cena + "zł.";     
        break;
        case C: var cena=document.getElementById("div").innerHTML = "Cena Twojego koszyka wynosi: " + cena + "zł.";     
        break;
        default: var cena=document.getElementById("div").innerHTML = "Prosimy wybrać rodukt";
        break;
    }
}