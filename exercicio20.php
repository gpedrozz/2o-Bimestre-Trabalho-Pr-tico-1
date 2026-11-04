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
Descritivo: Array/FOR: Crie um array com os 7 dias da semana e imprima-os usando um laço for.
*******************************************************************************/

/*
Explicação: O array guarda os 7 dias. O for usa o índice de 0 até count($dias) - 1 para acessar e imprimir cada posição.
*/

$dias = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i] . PHP_EOL;
}
