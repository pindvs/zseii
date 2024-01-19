<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia świąteczna</title>
    <link rel="stylesheet" href="style.css">
    <script src="./script.js" defer></script>
</head>
<body>
    <h1>Hurtownia bombek choinkowych</h1>
    <hr/>
    <main>
        <div class="sets">
            <div class="set">
                <p>Zestaw 1</p>
                <div>
                    <img src="https://th.bing.com/th/id/R.c5c2f672301ed976377c337918e7d00d?rik=%2bNJZ5zeD1vSO%2fw&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f10%2fSingle-Green-Christmas-Ball-Transparent-Background.png&ehk=loFsiab1ay6YAmUtIiDBXXxH8%2bSWIyw4i5zZxynjAXI%3d&risl=&pid=ImgRaw&r=0" alt="">
                    <img src="https://th.bing.com/th/id/R.c5c2f672301ed976377c337918e7d00d?rik=%2bNJZ5zeD1vSO%2fw&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f10%2fSingle-Green-Christmas-Ball-Transparent-Background.png&ehk=loFsiab1ay6YAmUtIiDBXXxH8%2bSWIyw4i5zZxynjAXI%3d&risl=&pid=ImgRaw&r=0" alt="">
                    <img src="https://th.bing.com/th/id/R.c5c2f672301ed976377c337918e7d00d?rik=%2bNJZ5zeD1vSO%2fw&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f10%2fSingle-Green-Christmas-Ball-Transparent-Background.png&ehk=loFsiab1ay6YAmUtIiDBXXxH8%2bSWIyw4i5zZxynjAXI%3d&risl=&pid=ImgRaw&r=0" alt="">
                </div>
                </div>
            <div class="set">
                <p>Zestaw 2</p>
                <div>
                    <img src="https://th.bing.com/th/id/R.5da5080e6ff5cb8f951b9c52278e480c?rik=nx39I2BBVCtw0w&pid=ImgRaw&r=0" alt="">
                    <img src="https://th.bing.com/th/id/R.5da5080e6ff5cb8f951b9c52278e480c?rik=nx39I2BBVCtw0w&pid=ImgRaw&r=0" alt="">
                    <img src="https://th.bing.com/th/id/R.5da5080e6ff5cb8f951b9c52278e480c?rik=nx39I2BBVCtw0w&pid=ImgRaw&r=0" alt="">
                </div>
                </div>
            <div class="set">
                <p>Zestaw 3</p>
                <div>
                    <img src="https://th.bing.com/th/id/OIP.f5sfVbsAb0yldPIMama9sQAAAA?rs=1&pid=ImgDetMain" alt="">
                    <img src="https://th.bing.com/th/id/OIP.f5sfVbsAb0yldPIMama9sQAAAA?rs=1&pid=ImgDetMain" alt="">
                    <img src="https://th.bing.com/th/id/OIP.f5sfVbsAb0yldPIMama9sQAAAA?rs=1&pid=ImgDetMain" alt="">
                </div>
                </div>
        </div>
        <form action="./index.php" method="POST">
            <h2>Złóż zamówienie</h2>
            <label>
                Ilość pudełek:
                <select id="set" name="box-type">
                    <option value="1">Zestaw 1</option>
                    <option value="2">Zestaw 2</option>
                    <option value="3">Zestaw 3</option>
                </select>
            </label>
            <label>
                Ilość pudełek:
                <input type="number" id="box-count" min="1" value="1" name="box-count">
            </label>
            <label>
                Jestem stałym klientem
                <input type="checkbox" id="loyal-customer" name="loyal-customer">
            </label>
            <button>Złóż zamówienie</button>
        </form>
        <img src="https://th.bing.com/th/id/OIP.UioRFN9gUR3w8HmJHKS3iwHaKE?rs=1&pid=ImgDetMain" alt="Choinka" id="christmass-tree">
    </main>
    <section>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"):
            $box_type = (int) $_POST["box-type"];
            $box_count = (int) $_POST["box-count"];
            $totalPrice = $box_count;

            switch ($box_type) {
                case 1:
                    $totalPrice *= 12.5;
                    break;
                case 2:
                    $totalPrice *= 15.5;
                    break;
                case 3:
                    $totalPrice *= 17.5;
                    break;
            }

            if (isset($_POST["loyal-customer"])) {
                $discount = $totalPrice * 0.2;
                $totalPrice -= $discount;
            }
            unset($_POST);
        ?>
            <h4>Złożyłeś zamówienie:</h4>
            <p>Typ bombek: <?php echo $box_type ?></p>
            <p>Ilość pudełek: <?php echo $box_count ?></p>
            <?php if (isset($discount)): ?>
                <p style="color: green;">Zniżka: -<?php echo $discount ?> zł</p>
            <?php endif;?>
            <p>Cena całkowita: <?php echo $totalPrice ?> zł</p>
        <?php endif;?>
    </section>
</body>
</html>