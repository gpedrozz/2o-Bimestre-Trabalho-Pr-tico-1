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
Descritivo: Procedimento: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
*******************************************************************************/

/*
Explicação: O procedimento recebe o array associativo e acessa cada dado pela chave (marca, modelo, ano), imprimindo-os de forma legível.
*/

function imprimirCarro(array $carro): void
{
    echo "Marca:  " . $carro["marca"] . PHP_EOL;
    echo "Modelo: " . $carro["modelo"] . PHP_EOL;
    echo "Ano:    " . $carro["ano"] . PHP_EOL;
}

$carro = [
    "marca"  => "Toyota",
    "modelo" => "Corolla",
    "ano"    => 2022,
];

imprimirCarro($carro);
