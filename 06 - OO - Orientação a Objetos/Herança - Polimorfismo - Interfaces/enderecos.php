<?php

	use Alura\Banco\Modelo\Endereco;

	require_once 'autoload.php';

	$umEndereco = new Endereco('São Paulo', 'bairro Imirin', 'Minha teste', '71B');
	$outroEndereco = new Endereco('Rio de Janeiro', 'Centro', 'Rua 2', '50');

	echo $umEndereco . PHP_EOL;
	echo $outroEndereco;
