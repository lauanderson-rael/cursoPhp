<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <?php
    $dividendo = $_GET['v1'] ?? 0;
    $divisor = $_GET['v2'] ?? 1;
    $res = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num1">Dividendo:</label>
            <input type="number" name="v1" id="v1" value="<?= $dividendo ?>">
            <label for="num2">Divisor:</label>
            <input type="number" name="v2" id="v2" value="<?= $divisor ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <div style="display: flex;">
            <div class="bloco">
                <div class="quadrado">
                    <?= $dividendo ?>
                </div>
                <div class="quadrado" style="text-decoration: underline;">
                    <?= $resto ?>

                </div>
            </div>
            <div class="bloco">
                <div class="quadrado borda-esquerda borda-baixo">
                    <?= $divisor ?>

                </div>
                <div class="quadrado borda-esquerda">
                    <?= $res ?>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
