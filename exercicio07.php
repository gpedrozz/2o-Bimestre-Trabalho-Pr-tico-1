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
Descritivo: Crie um programa que peça ao usuário para adivinhar um número (ex: 7) e continue pedindo até que ele acerte.
*******************************************************************************/

/*
Explicação: O número secreto é 7. Lê-se o primeiro palpite e, enquanto for diferente do secreto, o while avisa o erro e pede outro. Ao acertar, o laço termina e exibe a mensagem final.
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

$secreto = 7;
$palpite = (int) lerEntrada("Adivinhe o número: ");

while ($palpite !== $secreto) {
    echo "Errou! Tente novamente." . PHP_EOL;
    $palpite = (int) lerEntrada("Adivinhe o número: ");
}

echo "Parabéns, você acertou!" . PHP_EOL;
