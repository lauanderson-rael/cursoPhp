<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <?php
    $salario = $_GET['v1'] ?? 0;
    $salarioMinimo = 1380;
    $div = $salario / $salarioMinimo;
    $resto = $salario % $salarioMinimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num1">Salário (R$)</label>
            <input type="number" name="v1" id="v1" value="<?= $salario ?>">
            <p>
                Considerando o salário mínimo de <b>R$ <?= number_format($salarioMinimo, 2, ",", "."); ?></b>
            </p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>
            <?php
            print "Quem recebe um salario de R$" . number_format($salario, 2, ',', '.') . "";
            print " ganha <b>" . intdiv($div, 1) . " salários minimos</b> + ";
            print "R$ " . number_format($resto, 2, ',', '.');
            ?>
        </p>

    </section>

</body>

</html>
