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
Descritivo: Escreva um programa que use while para imprimir os números de 1 a 10.
*******************************************************************************/

/*
Explicação: O contador é iniciado antes do laço. Enquanto $i <= 10, o while imprime o valor e incrementa $i manualmente.
*/

$i = 1;

while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}
