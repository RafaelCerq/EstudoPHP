<?php

	require_once 'autoload.php';

	use Alura\Banco\Service\ControladorDeBonificacoes;
	use Alura\Banco\Modelo\CPF;
	use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

	$umFuncionario = new Desenvolvedor(
		'João Silva',
		new CPF('123.456.789-10'),
		'Desenvolvedor',
		1000
	);

	$umFuncionario->sobeDeNivel();

	$umaFuncionaria = new Gerente(
		'Ana',
		new CPF('987.654.321-10'),
		'Gerente',
		3000
	);

	$umDiretor = new Diretor(
		'Raimundo',
		new CPF('123.951.789-11'),
		'Diretor',
		5000
	);

	$controlador = new ControladorDeBonificacoes();
	$controlador->adicionaBonificacaoDe($umFuncionario);
	$controlador->adicionaBonificacaoDe($umaFuncionaria);
	$controlador->adicionaBonificacaoDe($umDiretor);

	echo $controlador->recuperaTotal();
