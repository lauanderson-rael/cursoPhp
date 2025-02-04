<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num1">Primeiro valor:</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="num2">Segundo valor:</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php
        $res = $valor1 + $valor2;
        printf("<p>A soma entre os valores $valor1 e $valor2 é <b> igual a $res</b></p>");
        ?>
    </section>

</body>

</html>
