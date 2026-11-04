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
Descritivo: Procedimento: Crie um procedimento contagemRegressiva que receba um número e imprima uma contagem regressiva a partir dele até 0.
*******************************************************************************/

/*
Explicação: O for começa no número recebido e decrementa até chegar a 0 (inclusive), imprimindo cada valor.
*/

function contagemRegressiva(int $numero): void
{
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . PHP_EOL;
    }
}

contagemRegressiva(5);
