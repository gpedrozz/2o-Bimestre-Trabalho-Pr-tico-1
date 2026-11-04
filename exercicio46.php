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
Descritivo: Função: Elabore uma função ehPrimo que receba um número e retorne true se ele for primo e false caso contrário.
*******************************************************************************/

/*
Explicação: Números menores que 2 não são primos. Para os demais, testam-se divisores de 2 até a raiz do número; se algum divide exatamente, retorna false. Se nenhum divide, retorna true.
*/

function ehPrimo(int $numero): bool
{
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    return true;
}

foreach ([1, 2, 9, 13, 25, 29] as $n) {
    echo $n . ": " . (ehPrimo($n) ? "true" : "false") . PHP_EOL;
}
