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
Descritivo: Faça um programa que exiba a tabuada do 5, de 1 a 10.
*******************************************************************************/

/*
Explicação: O for varia o multiplicador de 1 a 10 e, a cada volta, imprime 5 x multiplicador = resultado.
*/

$numero = 5;

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . PHP_EOL;
}
