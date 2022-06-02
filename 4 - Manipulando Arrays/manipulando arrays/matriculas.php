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

// Unindo arrays (em caso de chaves não numéricas, caso tenha chaves iguais, o primeiro registro será substituido pelo próximo igual a ele)
// array_merge tem 2 comportamentos. Com strings como chaves, em caso de chaves duplicadas, ele sobrescreve os valores dos primeiros arrays com os valores das mesmas chaves dos arrays posteriores. Já em caso de chaves numéricas ele simplesmente adiciona os elementos dos arrays posteriores ao final dos arrays anteriores.
$alunos2022 = array_merge($alunos2021, $novosAlunos);

var_dump($alunos2022);

// vai unir arrays considerando apenas as chaves que não repetem
// O operador + sempre usa as chaves do primeiro array e nunca sobrescreve seus valores com o do segundo.
$alunos2022 = $alunos2021 + $novosAlunos;

var_dump($alunos2022);

// Possui mesmo comportamento do merge, porém é possível adicioar novos itens no meio
$alunos2022 = [...$alunos2021, 'Otavio', ...$novosAlunos];

var_dump($alunos2022);


/*
Como passar varios parametros em em uma chamada de uma função que espera um array, utilizando Spread Operator
funcao([], [], []);
function funcao(array ...$alunos){}
*/
/*
Como passar uma lista para varios parametros individuais de uma função, utilizando Spread Operator
funcao(...[1, 2, 3]);
function funcao(int $a, int $b, int $c){}
*/