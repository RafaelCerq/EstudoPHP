<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
	// Se primeiro elemento menor que o segundo elemento, retorna -1, se for maior retorna 1, se for igual retorna 0
    return $nota2['nota'] <=> $nota1['nota'];
}

// usort espera dois parametros, um array e uma função contendo como irá ordenar o array
usort($notas, 'ordenaNotas');
var_dump($notas);