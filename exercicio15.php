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
Descritivo: Crie um programa para encontrar e imprimir todos os números primos entre 1 e 50.
*******************************************************************************/

/*
Explicação: O for externo percorre de 2 a 50. Para cada número, o for interno testa divisores de 2 até a raiz do número; se algum divide exatamente (if com %), ele não é primo. Os que sobrevivem são impressos.
*/

for ($n = 2; $n <= 50; $n++) {
    $primo = true;

    for ($d = 2; $d * $d <= $n; $d++) {
        if ($n % $d === 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo $n . " ";
    }
}

echo PHP_EOL;
