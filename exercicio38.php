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
Descritivo: Procedimento: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média >= 7) ou "Reprovado".
*******************************************************************************/

/*
Explicação: O procedimento calcula a média aritmética das duas notas e usa um if para comparar com 7, imprimindo a média e a situação do aluno.
*/

function calcularMediaAluno(float $nota1, float $nota2): void
{
    $media = ($nota1 + $nota2) / 2;
    echo "Média: " . number_format($media, 2, ",", ".") . PHP_EOL;

    if ($media >= 7) {
        echo "Situação: Aprovado" . PHP_EOL;
    } else {
        echo "Situação: Reprovado" . PHP_EOL;
    }
}

calcularMediaAluno(8, 7);
calcularMediaAluno(5, 6);
