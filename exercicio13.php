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
Descritivo: Faça um programa que solicite uma senha ao usuário. O programa só deve continuar quando a senha correta ("1234") for digitada.
*******************************************************************************/

/*
Explicação: O do-while pede a senha ao menos uma vez e repete enquanto o valor digitado for diferente de "1234". Quando acerta, o laço termina e o programa continua.
*/

function lerEntrada(string $mensagem): string
{
    echo $mensagem;
    $linha = fgets(STDIN);
    if ($linha === false) {
        echo PHP_EOL . "Entrada encerrada." . PHP_EOL;
        exit;
    }
    return trim($linha);
}

$senhaCorreta = "1234";

do {
    $senha = lerEntrada("Digite a senha: ");

    if ($senha !== $senhaCorreta) {
        echo "Senha incorreta! Tente novamente." . PHP_EOL;
    }
} while ($senha !== $senhaCorreta);

echo "Senha correta! Acesso liberado." . PHP_EOL;
