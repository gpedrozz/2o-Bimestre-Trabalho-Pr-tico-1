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
Descritivo: FOREACH: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach.
*******************************************************************************/

/*
Explicação: O foreach percorre o array e acumula cada número em $soma. Ao final, imprime o total.
*/

$numeros = [4, 8, 15, 16, 23, 42, 7, 9, 12, 30];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma dos números é: $soma" . PHP_EOL;
