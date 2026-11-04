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
Descritivo: Função: Escreva uma função fatorial que receba um número e retorne seu fatorial.
*******************************************************************************/

/*
Explicação: O fatorial de n é o produto de 1 até n. O for multiplica o acumulador por cada número de 2 até n; fatorial de 0 e de 1 é 1.
*/

function fatorial(int $numero): int
{
    $resultado = 1;

    for ($i = 2; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

echo "5! = " . fatorial(5) . PHP_EOL;
echo "0! = " . fatorial(0) . PHP_EOL;
