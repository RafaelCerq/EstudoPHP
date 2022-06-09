<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

// ordena em ordem Crescente
sort($notas);
var_dump($notas);

// ordena em ordem Decrescente
rsort($notas);
var_dump($notas);

// odena em ordem Crescente mantendo os índices
asort($notas);
var_dump($notas);

// odena em ordem Decrescente mantendo os índices
arsort($notas);
var_dump($notas);

// ordena em ordem Crescente dos índices
ksort($notas);
var_dump($notas)

// ordena em ordem Decrescente dos índices
krsort($notas);
var_dump($notas)
