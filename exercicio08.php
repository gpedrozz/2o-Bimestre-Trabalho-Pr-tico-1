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
Descritivo: Faça um programa que imprima os múltiplos de 3, de 3 a 30.
*******************************************************************************/

/*
Explicação: O contador começa em 3 e, enquanto for <= 30, é impresso e somado de 3 em 3, gerando os múltiplos de 3.
*/

$i = 3;

while ($i <= 30) {
    echo $i . PHP_EOL;
    $i += 3;
}
