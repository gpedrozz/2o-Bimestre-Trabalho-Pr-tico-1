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
Descritivo: Procedimento: Crie um procedimento desenharLinha que imprima uma linha de 20 hifens --------------------.
*******************************************************************************/

/*
Explicação: O procedimento usa str_repeat() para repetir o caractere "-" 20 vezes e imprime a linha.
*/

function desenharLinha(): void
{
    echo str_repeat("-", 20) . PHP_EOL;
}

desenharLinha();
