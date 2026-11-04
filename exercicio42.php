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
Descritivo: Função: Crie uma função maiorNumero que receba dois números e retorne o maior entre eles.
*******************************************************************************/

/*
Explicação: Um if compara os dois números e a função retorna o maior; se forem iguais, retorna qualquer um deles.
*/

function maiorNumero(float $a, float $b): float
{
    if ($a > $b) {
        return $a;
    }
    return $b;
}

echo "O maior entre 12 e 20 é: " . maiorNumero(12, 20) . PHP_EOL;
