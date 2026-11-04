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
Descritivo: Função: Elabore uma função converterParaMaiusculas que receba uma string e a retorne em letras maiúsculas.
*******************************************************************************/

/*
Explicação: A função usa mb_strtoupper(), que converte também letras acentuadas, e retorna o texto em maiúsculas.
*/

function converterParaMaiusculas(string $texto): string
{
    return mb_strtoupper($texto, "UTF-8");
}

echo converterParaMaiusculas("programação em php") . PHP_EOL;
