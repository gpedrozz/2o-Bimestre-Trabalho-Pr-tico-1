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
Descritivo: Procedimento com Múltiplos Parâmetros: Crie um procedimento mostrarDados que receba nome, idade e cidade e os imprima de forma organizada.
*******************************************************************************/

/*
Explicação: O procedimento recebe três parâmetros e os imprime, um por linha, com rótulos para deixar a saída organizada.
*/

function mostrarDados(string $nome, int $idade, string $cidade): void
{
    echo "Nome:   $nome" . PHP_EOL;
    echo "Idade:  $idade anos" . PHP_EOL;
    echo "Cidade: $cidade" . PHP_EOL;
}

mostrarDados("João Silva", 22, "Ponta Porã");
