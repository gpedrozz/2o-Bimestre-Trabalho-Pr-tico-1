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
Descritivo: Procedimento: Crie um procedimento chamado saudacao que imprima "Bem-vindo ao PHP!".
*******************************************************************************/

/*
Explicação: Procedimento é uma função sem retorno: saudacao() apenas executa um echo. Depois é chamada no fluxo principal.
*/

function saudacao(): void
{
    echo "Bem-vindo ao PHP!" . PHP_EOL;
}

saudacao();
