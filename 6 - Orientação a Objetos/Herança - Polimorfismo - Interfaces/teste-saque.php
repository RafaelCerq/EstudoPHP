<?php

	use Alura\Banco\Modelo\Conta\ContaPoupanca;
	use Alura\Banco\Modelo\Conta\ContaCorrente;
	use Alura\Banco\Modelo\Conta\Titular;
	use Alura\Banco\Modelo\CPF;
	use Alura\Banco\Modelo\Endereco;

	require_once 'autoload.php';

	$conta = new ContaPoupanca(
		new Titular(
			new CPF('123.456.789-10'),
			'João Silva',
			new Endereco('São Paulo', 'bairro Teste', 'Rua 9 de julho', '80')
		)
	);
	$conta->deposita(500);
	$conta->saca(100);

	echo $conta->recuperaSaldo();
