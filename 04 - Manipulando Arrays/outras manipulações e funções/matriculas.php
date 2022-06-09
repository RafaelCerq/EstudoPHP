<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];

// ADicionar itens ao final de um array
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
//Devemos usar [] quando queremos adicionar apenas um elemento e array_push quando queremos adicionar vários.
$alunos2022[] = 'Luiz';

var_dump($alunos2022);

// Adiciona elementos no inicio de um array
array_unshift($alunos2022, 'Stephane', 'Rafaela');

var_dump($alunos2022);

// remove o primeiro elemento do array, retorna ele e reordena o array (Apenas reordena se for de chave numérica)
echo array_shift($alunos2022) . PHP_EOL;

var_dump($alunos2022);

// remove o ultimo elemento do array, retorna ele e reordena o array (Apenas reordena se for de chave numérica)
echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);
