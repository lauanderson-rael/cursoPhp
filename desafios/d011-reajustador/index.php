<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <?php
    $preco = $_GET['preco'] ?? 2000;
    $percentual = $_GET['percentual'] ?? 0;
    $percentual = (int)$percentual;
    $res = $preco + ($preco * ($percentual / 100));



    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do produto (R$):</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>">

            <label for="percentual">Qual será o percentual de reajuste? <b id="valor">(0%)</b> </label>
            <input style="padding:12px 0;" type="range" step="0.01" id="volume" name="percentual" min="0" max="100" value="<?= $percentual ?>" />

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do reajuste</h2>
        <p>
            <?php
            echo "O produto que custava R$ " . number_format($preco, 2, ",", ".") . " com <b>" . $percentual . "% de aumento</b> vai passar a custar " . "<b>R$ " . number_format($res, 2, ",", ".") . "</b>" . " a partir de agora.";
            ?>
        </p>

    </section>

    <script>
        const range = document.getElementById('volume');
        const valor = document.getElementById('valor');

        // Atualiza o valor ao mexer na barra
        range.addEventListener('input', function() {
            valor.textContent = "(" + Math.round(range.value) + "%)"
        });
    </script>
</body>

</html>
