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
Descritivo: Array Heterogêneo (Associativo): Crie um array associativo para armazenar os dados de um aluno (nome, idade, curso).
*******************************************************************************/

/*
Explicação: Um array associativo relaciona chaves (nome, idade, curso) a valores de tipos diferentes (string e inteiro), por isso é heterogêneo. É exibido com print_r.
*/

$aluno = [
    "nome"  => "Ana Castela da Silva",
    "idade" => 20,
    "curso" => "Engenharia de Software",
];

print_r($aluno);
