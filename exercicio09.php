<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT2
Componentes:
26006187-2 - Vinicius Vanderlinde Trindade
26010450-2 - Gustavo Pedroso Agostinho
26009450-2 - Marçal Felipe
Data: 30 de Outubro de 2026
Descritivo: Escreva um programa que leia números do usuário até que ele digite 0 e, no final, mostre a soma de todos os números digitados.
*******************************************************************************/

/*
Explicação: O while repete enquanto o número lido for diferente de 0, acumulando cada valor em $soma. Quando o usuário digita 0, o laço acaba e a soma é exibida.
*/

function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    $linha = fgets(STDIN);
    if ($linha === false) {
        echo PHP_EOL . "Entrada encerrada." . PHP_EOL;
        exit;
    }
    return trim($linha);
}

$soma = 0;
$numero = (float) lerEntrada("Digite um número (0 para encerrar): ");

while ($numero != 0) {
    $soma += $numero;
    $numero = (float) lerEntrada("Digite um número (0 para encerrar): ");
}

echo "A soma dos números digitados é: $soma" . PHP_EOL;
