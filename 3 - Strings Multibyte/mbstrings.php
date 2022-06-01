<?php

$string = 'Testes de integração com PHP';

// Conta número de bytes que tem na string
echo strlen($string) . PHP_EOL;

// Coloca os caracteres sem acentos em maiúsculo
echo strtoupper($string) . PHP_EOL;

// Conta número de caracteres que tem na String
echo mb_strlen($string) . PHP_EOL;

// Coloca todos caracteres em maiúsculo
echo mb_strtoupper($string) . PHP_EOL;

// Coloca todos caracteres em minusculo
echo mb_strtolower($string) . PHP_EOL;

// Coloca primeiro caracter de cada palavra em maiusculo
echo mb_convert_case($string, MB_CASE_TITLE) . PHP_EOL;

// Exemplo de conversão de caracteres
$convertida = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
echo $convertida;

