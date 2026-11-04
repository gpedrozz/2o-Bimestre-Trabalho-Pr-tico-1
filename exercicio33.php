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
Descritivo: Procedimento: Crie um procedimento mostrarTabuada que receba um número e imprima sua tabuada de 1 a 10.
*******************************************************************************/

/*
Explicação: O procedimento recebe o número e usa um for de 1 a 10 para imprimir cada linha da tabuada.
*/

function mostrarTabuada(int $numero): void
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . PHP_EOL;
    }
}

mostrarTabuada(7);
