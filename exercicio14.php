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
Descritivo: Escreva um programa que leia um número e o imprima. O programa deve repetir até que o número lido seja negativo.
*******************************************************************************/

/*
Explicação: Dentro do do-while o número é lido e impresso. A condição ($numero >= 0) mantém o laço enquanto o número não for negativo; ao digitar um negativo (que também é impresso), o programa termina.
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

do {
    $numero = (float) lerEntrada("Digite um número (negativo para encerrar): ");
    echo "Número lido: $numero" . PHP_EOL;
} while ($numero >= 0);

echo "Foi digitado um número negativo. Fim." . PHP_EOL;
