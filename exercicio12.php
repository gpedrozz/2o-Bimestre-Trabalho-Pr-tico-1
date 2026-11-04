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
Descritivo: Crie um menu de opções (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu até que o usuário escolha "Sair".
*******************************************************************************/

/*
Explicação: O menu é exibido dentro do do-while, que garante que ele apareça ao menos uma vez. Um switch trata cada opção e o laço só termina quando o usuário digita 3 (Sair).
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

do {
    echo PHP_EOL . "===== MENU =====" . PHP_EOL;
    echo "1. Iniciar" . PHP_EOL;
    echo "2. Parar" . PHP_EOL;
    echo "3. Sair" . PHP_EOL;
    $opcao = lerEntrada("Escolha uma opção: ");

    switch ($opcao) {
        case "1":
            echo "Iniciando..." . PHP_EOL;
            break;
        case "2":
            echo "Parando..." . PHP_EOL;
            break;
        case "3":
            echo "Saindo do programa. Até logo!" . PHP_EOL;
            break;
        default:
            echo "Opção inválida!" . PHP_EOL;
    }
} while ($opcao !== "3");
