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
Descritivo: Array Associativo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a média.
*******************************************************************************/

/*
Explicação: O array associativo relaciona cada disciplina à sua nota. array_sum() soma as notas e a divisão por count() dá a média, exibida com 2 casas decimais.
*/

$notas = [
    "Matemática" => 8.5,
    "Português"  => 7.0,
    "História"   => 9.0,
    "Ciências"   => 6.5,
];

$media = array_sum($notas) / count($notas);

foreach ($notas as $disciplina => $nota) {
    echo "$disciplina: $nota" . PHP_EOL;
}

echo "Média: " . number_format($media, 2, ",", ".") . PHP_EOL;
