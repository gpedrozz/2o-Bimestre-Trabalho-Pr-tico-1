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
Descritivo: Função: Crie uma função chamada somar que receba dois números e retorne a soma deles.
*******************************************************************************/

/*
Explicação: A função recebe dois números e devolve a soma com return. O valor retornado é guardado em uma variável e impresso.
*/

function somar(float $a, float $b): float
{
    return $a + $b;
}

$resultado = somar(10, 5);
echo "10 + 5 = $resultado" . PHP_EOL;
