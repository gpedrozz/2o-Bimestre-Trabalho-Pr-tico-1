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
Descritivo: Crie um programa que calcule e imprima a soma dos números de 1 a 100.
*******************************************************************************/

/*
Explicação: Uma variável acumuladora ($soma) começa em 0 e recebe cada número de 1 a 100 dentro do for. Ao final, imprime o total (5050).
*/

$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo "A soma de 1 a 100 é: $soma" . PHP_EOL;
