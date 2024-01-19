<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SantaClaus</title>          
    </head>
    <body style="background-image: url(tlo.png);background-color: #ffffffca;">
        <h1 style="margin-left: -28px; margin-right: -28px;      text-align: center; font-family: serif; border-bottom-width: 4px; background-color: #ffffffca; dodgerblue;">Hurtowania Bombek SantaClaus wita!</h1>
        <h2 style="text-align: center;">Zestawy Bombek</h2>
        <img src="zestawa.png" style="margin-left: 18%; float:left; height: 147px;">     
        <img src="zestawb.png" style="margin-left: 18%; float:left; height: 147px;">
        <img src="zestawc.png" style="margin-left: 18%; float:left; height: 146px;">
          <p></p>
          <p style="margin-top:180px; margin-left:300px; color: antiquewhite;">Zestaw A</p>
          <p style="margin-top:-36px; margin-left:600px; color: antiquewhite;">Zestaw B</p>
          <p style="margin-top:-36px; margin-left:900px; color: antiquewhite;    ">Zestaw C</p>
        <form>
            <select name="wybor" style="margin-left: 46.5%; margin-top: 80px;">
                <option value='1'>Zestaw A</option>
                <option value='2'>Zestaw B</option>
                <option value='3'>Zestaw C</option>
            </select><p></p>

            <?php
            $wybor+




?>

            <p style="color: antiquewhite;"><input type="checkbox" name="stalyklient" style="margin-left: 44%;">  Jestem stałym klientem</p>
            <p style="color: antiquewhite;"><input type="number" name="num" style="margin-left: 38%;">Wybierz liczbę sztuk</p>
            <p style=""><div id="div" style="margin-left: 44%; padding-bottom: 0px;  color: antiquewhite;"></div></p>
            <button type="button" onclick=wycen() style="margin-left: 44%; margin-top: 18px; width: 144px; height: 44px; background-image:url(background.png); border-radius: 22px;">Pokaż koszta zamówienia</button>
        </form>
        <h1 style="text-align: center; margin-left: -28px; margin-right: -28px;        padding-bottom:440px ;  padding-top:20px; background-color: #ffffffca">Zapraszamy też do sklepów stacjonarnych!</h1>
    </body>
</html>