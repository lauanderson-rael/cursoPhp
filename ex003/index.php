<?php
// importando arquivos
require "./sistema/configuracao.php";
include_once "Funcoes.php";
date_default_timezone_set('America/Sao_Paulo');


// tipos de variaveis
$string = "Hello World";
$int = 10;
$float = 10.5;
$bool = true;
$nulo = null;


// chamando funcoes
saldacao(20);
apresentacao("Joao Pedro", 20);

// qtd de caracteres string
var_dump($string, $int);
echo "<hr><b>Quantidade de caracteres: </b>";
echo mb_strlen($string);


// data e hora
echo "<hr><b>Data e hora atual: </b>";
$data = date('d/m/Y H:i:s');
echo $data;


// constantes
echo "<hr><b>Constante: </b>";
const PI = 3.14;
echo "PI = " . PI;


// interpolacao de variaveis
echo '<hr><b>interpolacao de variaveis, usar (""): </b>';
const CANAL = "Curso em Video \u{1F499}";
$nome = "Lauanderson";
$sobrenome = "Costa";
echo "<br>Eu adoro o canal " . CANAL . "<br>";
echo "$nome \"Rael\" $sobrenome";


// classes
echo "<hr><b>Classe: </b> <br>";
class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome = null, $idade = null)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

$p1 = new Pessoa("Lau", 21);
echo $p1->nome, " tem ", $p1->idade, " anos <br>";
echo "{$p1->nome} tem {$p1->idade} anos <br>";
