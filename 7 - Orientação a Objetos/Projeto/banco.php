<?php

	require_once 'src/Conta.php';
	require_once 'src/Titular.php';
	require_once 'src/CPF.php';

	$joao = new Titular(new CPF('123.456.789-10'), 'João Silva');
	$primeiraConta = new Conta($joao);
	$primeiraConta->deposita(500);
	$primeiraConta->saca(300); // isso é ok

	echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
	echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
	echo $primeiraConta->recuperaSaldo() . PHP_EOL;

	$ana = new Titular(new CPF('564.123.784-65'), 'Ana');
	$segundaConta = new Conta($ana);
	var_dump($segundaConta);

	$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Lucas'));
	unset($segundaConta);
	echo Conta::recuperaNumeroDeContas();
