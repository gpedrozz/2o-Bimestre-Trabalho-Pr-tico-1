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
Descritivo: Array Multidimensional: Crie uma matriz 3x3 (array de arrays) e preencha-a com números. Imprima o elemento da segunda linha e terceira coluna.
*******************************************************************************/

/*
Explicação: A matriz é um array de 3 arrays com 3 números cada. Como os índices começam em 0, a segunda linha é [1] e a terceira coluna é [2], logo $matriz[1][2].
*/

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

echo "Elemento da 2ª linha, 3ª coluna: " . $matriz[1][2] . PHP_EOL;
