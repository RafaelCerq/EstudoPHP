<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

// verifica se o array possui indice numérico. Obs. Disponível a partir do PHP 8.1
var_dump(array_is_list($notas));

//verificar se uma chave existe
var_dump(array_key_exists($notas['Ana']));

// verifica se uma chave existe e é diferente de nulo
echo 'Ana fez a prova:' . PHP_EOL;
var_dump(isset($notas['Ana']));

// verifica se o valor existe no array
echo 'Alguém tirou 10?' . PHP_EOL;
echo(in_array(10));

// verifica se o valor existe no array. Obs. com o parametro True faz uma verificação mais restritiva, não utilizando dados dentro de string
echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

// Retorna a chave que tem o valor no array.
echo 'Quem tirou 10?' . PHP_EOL;
echo(array_search(10, $notas, true));

// Retorna a chave que tem o valor no array. Obs. com o parametro True faz uma verificação mais restritiva, não utilizando dados dentro de string
echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, true));
