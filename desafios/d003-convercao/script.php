<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <section>
        <h1>Conversor de moedas v1.0</h1>

        <?php
        $real = $_GET['valorRS'];
        $real = str_replace(',', '.', $real);
        $real = (float) $real;
        $cotacao = 6.20;
        $dolar = $real / $cotacao;
        echo "<p>Seus R$ " . number_format($real, 2, ",", ".") . " equivalem a <b>US$ " . number_format($dolar, 2, ",", ".") . "</b></p>";
        echo "<p><b>*Cotação fixa de US$ $cotacao</b> informada diretamente no código</p>";

        ?>
        <br>
        <a href="javascript:history.go(-1)">
            <button>
                <i class="fa-solid fa-arrow-left"></i> voltar
            </button>
        </a>
    </section>


</body>

</html>

<!--
--Superglobais
$_GET
$_POST
$_REQUEST = $_GET + $_POST
$_FILES
-->

<!--
--Funcoes aritimeticas
abs() = valor absoluto
sqrt() ou (x ** (1/2)) = raiz quadrada
base_convert() = converte de uma base para outra
ceil() = arredonda para cima
floor() = arredonda para baixo
round() = arredonda para o valor mais proximo
intdiv() = divisão inteira
min() = retorna o menor valor
max() = retorna o maior valor
pi() ou M_PI = retorna o valor de pi
pow(x, y) = potencia


-->
