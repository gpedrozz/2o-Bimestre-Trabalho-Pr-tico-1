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
Descritivo: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.
*******************************************************************************/

/*
Explicação: O número é convertido para positivo (abs). A cada volta do while ele é dividido por 10 (divisão inteira) e o contador aumenta, até zerar. O caso especial do 0 conta como 1 dígito.
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

$numero = abs((int) lerEntrada("Digite um número inteiro: "));
$digitos = 0;

if ($numero === 0) {
    $digitos = 1;
}

while ($numero > 0) {
    $numero = intdiv($numero, 10);
    $digitos++;
}

echo "Quantidade de dígitos: $digitos" . PHP_EOL;
