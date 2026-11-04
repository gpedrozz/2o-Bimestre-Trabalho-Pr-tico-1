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
Descritivo: Procedimento: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é "Par" ou "Ímpar".
*******************************************************************************/

/*
Explicação: O operador de resto (%) por 2 indica a paridade: resto 0 é par, caso contrário é ímpar. O resultado é impresso dentro do procedimento.
*/

function verificarParImpar(int $numero): void
{
    if ($numero % 2 === 0) {
        echo "$numero é Par" . PHP_EOL;
    } else {
        echo "$numero é Ímpar" . PHP_EOL;
    }
}

verificarParImpar(8);
verificarParImpar(13);
