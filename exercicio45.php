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
Descritivo: Função com Array: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.
*******************************************************************************/

/*
Explicação: A função usa reset(), que posiciona o ponteiro no início do array e devolve o primeiro elemento (ou false se estiver vazio). Funciona também com arrays associativos.
*/

function obterPrimeiroElemento(array $itens)
{
    return reset($itens);
}

$cores = ["Azul", "Verde", "Vermelho"];
echo "Primeiro elemento: " . obterPrimeiroElemento($cores) . PHP_EOL;
