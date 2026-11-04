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
Descritivo: Array Associativo: Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".
*******************************************************************************/

/*
Explicação: Cria-se um array indexado em que cada elemento é um array associativo (nome e preço), formando uma estrutura de dados aninhada. A chave "preco" foi escrita sem acento para evitar problemas de codificação.
*/

$produtos = [
    ["nome" => "Caderno",  "preco" => 15.90],
    ["nome" => "Caneta",   "preco" => 3.50],
    ["nome" => "Mochila",  "preco" => 129.99],
    ["nome" => "Lápis",    "preco" => 1.75],
];

print_r($produtos);
