<?php

// cria variaveis conforme array
$dados = [ 'João', 10, 24];
list($nome, $nota, $idade) = $dados;

var_dump($nome, $nota, $idade);

// Mesmo comportamento do list, porém de uma forma diferente (a partir do php 7.1)
$dados = [ 'João', 10, 24];
[$nome, $nota, $idade] = $dados;

var_dump($nome, $nota, $idade);

// cria variaveis referente a um array que possui outro tipode chave
$dados = [
    'nome' => 'João',
    'nota' => 10,
    'idade' => 24,
];
['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;
var_dump($nome, $nota, $idade);


$dados = [
    'nome' => 'João',
    'nota' => 10,
    'idade' => 24,
];
// percorre o array e transforma as chaves em variaveis
extract($dados);
var_dump($nome, $nota, $idade);

// Transforma várias variáveis em array
var_dump(compact('nome', 'nota', 'idade'));