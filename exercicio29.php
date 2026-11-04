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
Descritivo: FOREACH/IF: Dado um array de números [12, 5, 23, 18, 9, 45], imprima apenas os números maiores que 20.
*******************************************************************************/

/*
Explicação: O foreach percorre o array e o if filtra: só imprime o número quando ele é maior que 20 (23 e 45).
*/

$numeros = [12, 5, 23, 18, 9, 45];

foreach ($numeros as $numero) {
    if ($numero > 20) {
        echo $numero . PHP_EOL;
    }
}
