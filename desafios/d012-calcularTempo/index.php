<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <?php
    $segundosT = $_GET['segundos'] ?? 1000;
    $minutosT = $segundosT / 60;
    $horasT = $minutosT / 60;
    $diasT = $horasT / 24;

    $sem = $diasT / 7;
    $dias = $diasT % 7;
    $horas = $horasT % 24;
    $minutos = $minutosT % 60;
    $segundos = $segundosT % 60;



    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o tempo de segundos?</label>
            <input type="number" name="segundos" id="idsegundos" value="<?= $segundosT ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <p>
            <?php
            echo "Analizando o valor que você digitou, " . "<b>" . number_format($segundosT, 0, ".", ".") . " segundos</b> equivale a um total de: ";
            ?>
        </p>

        <ul>
            <?php
            print_r("<li>" . intval($sem) . " semanas </li>");
            print_r("<li>" . intval($dias) . " dias </li>");
            print_r("<li>" . intval($horas) . " horas </li>");
            print_r("<li>" . intval($minutos) . " minutos </li>");
            print_r("<li>" . intval($segundos) . " segundos </li>");
            ?>
        </ul>

    </section>

</body>

</html>
