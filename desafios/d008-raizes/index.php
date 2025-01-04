<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <?php
    $v1 = $_GET['v1'] ?? 1;
    $p1 = $_GET['p1'] ?? 1;

    $v2 = $_GET['v2'] ?? 1;
    $p2 = $_GET['p2'] ?? 1;

    $media = ($v1 + $v2) / 2;
    $mediaP = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1° Valor:</label>
            <input type="number" name="v1" id="v1" value="<?= $v1 ?>">
            <label for="p1" style="background:#d29b9b;">1° Peso:</label>
            <input type="number" name="p1" id="p1" value="<?= $p1 ?>">

            <label for="v2">2° Valor:</label>
            <input type="number" name="v2" id="v2" value="<?= $v2 ?>">
            <label for="p2" style="background:#d29b9b;">2° Peso:</label>
            <input type="number" name="p2" id="p2" value="<?= $p2 ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <p>
            <?php
            echo "Analizando os valores:";
            ?>
        <ul>
            <?php
            echo "<li>A <b>Média Aritmética Simples</b> entre os valores é igual a " . number_format($media, 2, ",", ".") . "</li>";
            echo "<li>A <b>Média Aritmética ponderada</b> com pesos $p1 e $p2 é igual a " . number_format($mediaP, 2, ",", ".") . "</li>";
            ?>
        </ul>
        </p>

    </section>

</body>

</html>
