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
Descritivo: Array Associativo/FOREACH: Usando o array do exercício 21, imprima cada dado no formato "chave: valor".
*******************************************************************************/

/*
Explicação: O foreach com a sintaxe $chave => $valor percorre o array associativo e imprime cada par no formato pedido.
*/

$aluno = [
    "nome"  => "Ana Castela da Silva",
    "idade" => 20,
    "curso" => "Engenharia de Software",
];

foreach ($aluno as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}
