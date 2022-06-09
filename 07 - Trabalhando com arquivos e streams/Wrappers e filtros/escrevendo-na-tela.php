<?php

	// stdout - saida padrão
	$tela = fopen('php://stdout', 'w');
	fwrite($tela, 'Olá mundo');
	
	echo PHP_EOL;

	// stderr - saida de erro
	$tela = fopen('php://stderr', 'w');
	fwrite($tela, 'Olá mundo');

	print PHP_EOL;

	//formas facilitadas
	fwrite(STDOUT, 'Olá mundo');
	
	echo PHP_EOL;

	fwrite(STDERR, 'Olá mundo');
	
	print PHP_EOL;
	
	// Copiando arquivos de um stream para o outro - lendo arquivo zip e mostrando na tela
	$cursos = fopen('zip://arquivos.zip#lista-cursos.txt', 'r');
	stream_copy_to_stream($cursos, STDOUT);