<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="/public/style.css">
</head>

<body>
    <?php
    $valor = $_GET['valor'] ?? 235;
    $valor2 = $_GET['valor'] ?? 235;

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor"><b>Qual valor você deseja sacar? (R$):</b></label>
            <input type="number" step="5" name="valor" id="valor" value="<?= $valor ?>">

            <p style="font-size: 12px; font-weight: 550;">*Notas disponiveis: R$100, R$50, R$10, R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <?php
        $notas100 = intval($valor / 100);
        $valor = $valor % 100;

        $notas50 = intval($valor / 50);
        $valor = $valor % 50;

        $notas10 = intval($valor / 10);
        $valor = $valor % 10;

        $notas5 = intval($valor / 5);
        $valor = $valor % 5;
        ?>
        <h2><?= "Saque de R$" . number_format($valor2, 2, ",", ".") . " realizado" ?></h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li>
                <img src="img/100_front.jpg" alt="nota de 100" width="120px">
                <span><?= "x$notas100" ?></span>
            </li>
            <li>
                <img src="img/50_front.jpg" alt="nota de 50" width="120px">
                <span><?= "x$notas50" ?></span>
            </li>
            <li>
                <img src="img/10_front.jpg" alt="nota de 10" width="120px">
                <span><?= "x$notas10" ?></span>
            </li>
            <li>
                <img src="img/5_front.jpg" alt="nota de 5" width="120px">
                <span><?= "x$notas5" ?></span>
            </li>
        </ul>

    </section>

</body>

</html>
