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
Descritivo: Função com String: Crie uma função contarVogais que receba uma string e retorne o número de vogais.
*******************************************************************************/

/*
Explicação: A função usa preg_match_all() com uma expressão regular que reconhece vogais (com e sem acento, maiúsculas e minúsculas) e retorna a quantidade de ocorrências encontradas.
*/

function contarVogais(string $texto): int
{
    return preg_match_all('/[aeiouáàâãéêíóôõúü]/iu', $texto);
}

echo "Vogais em 'Programação': " . contarVogais("Programação") . PHP_EOL;
