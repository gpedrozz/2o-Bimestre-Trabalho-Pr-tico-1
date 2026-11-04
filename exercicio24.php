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
Descritivo: FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
*******************************************************************************/

/*
Explicação: O foreach externo percorre cada produto e o foreach interno percorre os campos (nome e preço) de cada um, imprimindo-os. O preço é formatado com number_format no padrão brasileiro.
*/

$produtos = [
    ["nome" => "Caderno",  "preco" => 15.90],
    ["nome" => "Caneta",   "preco" => 3.50],
    ["nome" => "Mochila",  "preco" => 129.99],
    ["nome" => "Lápis",    "preco" => 1.75],
];

foreach ($produtos as $produto) {
    foreach ($produto as $campo => $valor) {
        if ($campo === "preco") {
            echo "Preço: R$ " . number_format($valor, 2, ",", ".") . PHP_EOL;
        } else {
            echo "Nome: $valor" . PHP_EOL;
        }
    }
    echo "-----" . PHP_EOL;
}
