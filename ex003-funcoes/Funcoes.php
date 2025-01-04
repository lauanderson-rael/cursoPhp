<?php

/**
 * Saldacao com base no horario
 *
 * @param int $hora hora para saldar
 * @return void horario e uma saldacao
 */
function saldacao(int $hora): void
{
    $horario = date('H:i:s');
    $saldacao = "";
    if ($hora >= 0 && $hora <= 5) {
        $saldacao = "Boa madrugada";
    } elseif ($hora >= 6 && $hora <= 12) {
        $saldacao = "Bom dia";
    } elseif ($hora >= 13 && $hora <= 18) {
        $saldacao = "Boa tarde";
    } else {
        $saldacao = "Boa noite";
    }

    echo "$horario - $saldacao<hr>";
}

function apresentacao(string $nome, int $idade, string $pais = 'Brasil'): void
{
    echo "Ola $nome, voce tem $idade anos e mora em $pais<hr>";
}
