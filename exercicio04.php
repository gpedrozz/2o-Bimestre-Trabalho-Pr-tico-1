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
Descritivo: Escreva um programa que use for para contar de 10 a 1 em ordem decrescente.
*******************************************************************************/

/*
Explicação: O contador começa em 10 e é decrementado ($i--) a cada volta, enquanto for maior ou igual a 1.
*/

for ($i = 10; $i >= 1; $i--) {
    echo $i . PHP_EOL;
}
