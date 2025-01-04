<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <?php
    $nasc = $_GET['nasc'] ?? 2000;
    $anoAtual = date("Y");
    $anoX = $_GET['anoX'] ?? $anoAtual;



    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano voçê nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?= $nasc ?>">

            <label for="anoX">Quer saber a sua idade em que ano?(<?= "Atualmente estamos em <b>$anoAtual</b>" ?>)</label>
            <input type="number" name="anoX" id="anoX" value="<?= $anoX ?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <p>
            <?php
            echo "Quem nasceu em $nasc vai ter <b>" . $anoX - $nasc . " anos</b> em $anoX";
            ?>
        </p>

    </section>

</body>

</html>
