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
Descritivo: FOREACH: Usando o array de cidades do exercício 16, imprima cada cidade em uma nova linha usando foreach.
*******************************************************************************/

/*
Explicação: O foreach percorre o array de cidades e, a cada iteração, $cidade recebe um elemento, que é impresso em uma nova linha.
*/

$cidades = ["Ponta Porã", "Campo Grande", "Dourados", "Curitiba", "São Paulo"];

foreach ($cidades as $cidade) {
    echo $cidade . PHP_EOL;
}
