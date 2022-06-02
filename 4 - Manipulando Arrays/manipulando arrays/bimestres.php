<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];


//array_diff vai retornar um novo array contendo os elementos que existam no primeiro array, mas não existiam nos próximos arrays, só que isso de existir ou não ele só leva em consideração o valor. array-diff as chaves são simplesmente ignoradas
$alunosFaltantes = array_diff($notasBimestre1, $notasBimestre2);

var_dump($alunosFaltantes);

// array_diff_assoc, ele vai utilizar a associação para comparar, ele vai comparar tanto a chave quanto o valor
$alunosFaltantes = array_diff_assoc($notasBimestre1, $notasBimestre2);

var_dump($alunosFaltantes);

// array_diff_key diferença entre arrays só que somente utilizando as chaves e não utilizando todo o meu array, quer dizer, não utilizando os valores do meu array,
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

var_dump($alunosFaltantes);

// irá retornar apenas as chaves do array
$nomesAlunos = array_keys($alunosFaltantes);

// irá retornar apenas os values do array
$notasAlunos = array_values($alunosFaltantes);

// Irá combinar primeiro parametro como chave e segundo como value em um array
var_dump(array_combine($notasAlunos, $nomesAlunos));

// Inverte chave e value do array
var_dump(array_flip($alunosFaltantes));
