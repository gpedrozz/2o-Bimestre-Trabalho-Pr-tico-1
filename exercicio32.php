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
Descritivo: Procedimento com Parâmetro: Crie um procedimento saudacaoUsuario que receba um nome como parâmetro e imprima "Olá, [nome]!".
*******************************************************************************/

/*
Explicação: O procedimento recebe $nome como parâmetro e o interpola na mensagem impressa.
*/

function saudacaoUsuario(string $nome): void
{
    echo "Olá, $nome!" . PHP_EOL;
}

saudacaoUsuario("Maria");
