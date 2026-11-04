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
Descritivo: Escreva um programa que use do-while para imprimir os números de 1 a 10.
*******************************************************************************/

/*
Explicação: O do-while executa o bloco ao menos uma vez e só depois testa a condição ($i <= 10), imprimindo e incrementando o contador.
*/

$i = 1;

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 10);
