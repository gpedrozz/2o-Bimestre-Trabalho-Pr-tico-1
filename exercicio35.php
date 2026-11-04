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
Descritivo: Procedimento com Array: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
*******************************************************************************/

/*
Explicação: O procedimento recebe um array por parâmetro e usa foreach para imprimir cada elemento.
*/

function imprimirArray(array $itens): void
{
    foreach ($itens as $item) {
        echo $item . PHP_EOL;
    }
}

imprimirArray(["Maçã", "Banana", "Uva"]);
