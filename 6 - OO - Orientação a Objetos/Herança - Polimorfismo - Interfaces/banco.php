<?php

	require_once 'autoload.php';

	use Alura\Banco\Modelo\Conta\Titular;
	use Alura\Banco\Modelo\Endereco;
	use Alura\Banco\Modelo\CPF;
	use Alura\Banco\Modelo\Conta\Conta;

	$endereco = new Endereco('São Paulo', 'um bairro', 'minha rua', '71B');
	$joao = new Titular(new CPF('123.456.789-10'), 'João Silva', $endereco);
	$primeiraConta = new Conta($joao);
	$primeiraConta->deposita(500);
	$primeiraConta->saca(300); // isso é ok

	echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
	echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
	echo $primeiraConta->recuperaSaldo() . PHP_EOL;

	$ana = new Titular(new CPF('698.549.548-10'), 'Ana', $endereco);
	$segundaConta = new Conta($ana);
	var_dump($segundaConta);

	$outroEndereco = new Endereco('A', 'b', 'c', 'D');
	$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Lucas', $outroEndereco));
	unset($segundaConta);
	echo Conta::recuperaNumeroDeContas();
