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
Descritivo: Array/Busca: Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.
*******************************************************************************/

/*
Explicação: A função in_array() procura o valor no array e retorna true ou false; um if/else imprime o resultado da busca.
*/

$frutas = ["Banana", "Laranja", "Maçã", "Uva", "Manga"];

if (in_array("Maçã", $frutas)) {
    echo "A fruta Maçã existe no array." . PHP_EOL;
} else {
    echo "A fruta Maçã não existe no array." . PHP_EOL;
}
