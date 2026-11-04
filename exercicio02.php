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
Descritivo: Crie um programa que use for para imprimir os números pares de 2 a 20.
*******************************************************************************/

/*
Explicação: O contador começa em 2 e avança de 2 em 2 ($i += 2), gerando somente números pares até 20.
*/

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . PHP_EOL;
}
