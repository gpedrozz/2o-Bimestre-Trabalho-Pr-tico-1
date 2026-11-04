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
Descritivo: Função: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev()
*******************************************************************************/

/*
Explicação: A string é dividida em caracteres (preg_split com /u, que respeita acentos). Depois um for percorre do último ao primeiro caractere, concatenando-os em uma nova string, o que inverte o texto sem strrev().
*/

function inverterString(string $texto): string
{
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
    $invertida = "";

    for ($i = count($caracteres) - 1; $i >= 0; $i--) {
        $invertida .= $caracteres[$i];
    }

    return $invertida;
}

echo inverterString("Programação") . PHP_EOL;
