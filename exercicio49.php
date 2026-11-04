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
Descritivo: Função: Faça uma função gerarArrayPares que receba um número n e retorne um array com todos os números pares de 0 até n.
*******************************************************************************/

/*
Explicação: O for começa em 0 e avança de 2 em 2 até n, adicionando cada par ao array com $pares[] = $i. A função retorna o array montado.
*/

function gerarArrayPares(int $n): array
{
    $pares = [];

    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }

    return $pares;
}

echo implode(", ", gerarArrayPares(10)) . PHP_EOL;
