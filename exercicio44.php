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
Descritivo: Função: Escreva uma função calcularAreaRetangulo que receba a largura e a altura e retorne a área.
*******************************************************************************/

/*
Explicação: A área do retângulo é largura x altura; a função retorna esse produto.
*/

function calcularAreaRetangulo(float $largura, float $altura): float
{
    return $largura * $altura;
}

echo "Área: " . calcularAreaRetangulo(5, 3) . PHP_EOL;
