<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <?php
    $numero = $_GET['v1'] ?? 1;
    $raiz2 = sqrt($numero);
    $raiz3 = pow($numero, 1 / 3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num1">Número</label>
            <input type="number" name="v1" id="v1" value="<?= $numero ?>">

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>
            <?php
            echo "Analizando o número <b>$numero</b>, temos:";
            ?>
        <ul>
            <?php
            echo "<li>A sua raiz quadrada é <b>" . number_format($raiz2, 3, ",", ".") . "</b></li>";
            echo "<li>A sua raiz cúbica é <b>" . number_format($raiz3, 3, ",", ".") . "</b></li>";
            ?>
        </ul>
        </p>

    </section>

</body>

</html>
