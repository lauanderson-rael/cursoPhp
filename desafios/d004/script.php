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
        $top = 100;
        $format = "json";
        //
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='12-31-2024'&$top$format";
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        $cotacaoAPI = $data['value'][0]['cotacaoCompra'];
        $site = "Banco do Brasil";

        //
        $real = $_GET['valorRS'];
        $real = str_replace(',', '.', $real);
        $real = (float) $real;

        $conversao = $real / $cotacaoAPI;
        echo "<p>Seus R$ $real equivalem a <b>US$ $conversao</b></p>";
        echo "<p>Cotação obtida diretamento do <b>$site</b></p>";


        echo "<pre>";
        print_r($cotacaoAPI);
        echo "</pre>";


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
