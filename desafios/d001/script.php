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
    <header>
        <h1>Resultado Final</h1>
    </header>

    <main>
        <?php
        #var_dump($_GET);
        $n = $_GET['numero'];
        $ant = $n - 1;
        $suc = $n + 1;
        echo "<p>O número escolhido foi <b>$n</b></p>";
        echo "<p>O seu antecessor é <b>$ant</b></p>";
        echo "<p>O seu sucessor é <b>$suc</b></p>";
        ?>
        <br>
        <a href="javascript:history.go(-1)">
            <button>
                <i class="fa-solid fa-arrow-left"></i> voltar
            </button>

        </a>
    </main>


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
