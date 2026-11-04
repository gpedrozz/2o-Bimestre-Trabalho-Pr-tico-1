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
Descritivo: Array/Funções Nativas: Dado o array [10, 2, 5, 8, 1], ordene-o em ordem crescente usando sort().
*******************************************************************************/

/*
Explicação: A função sort() reordena o próprio array em ordem crescente. Depois, implode() junta os elementos em uma string para exibição.
*/

$numeros = [10, 2, 5, 8, 1];

sort($numeros);

echo implode(", ", $numeros) . PHP_EOL;
