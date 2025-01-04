<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
        #var_dump($_GET);
        $n = $_GET['nome'] ?? "Sem nome";
        $s = $_GET['sobrenome'] ?? "Desconhecido";
        echo "É um prazer te conhecer, <b>$n $s </b>. Este é o meu site!";


        ?>
        <br>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
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
