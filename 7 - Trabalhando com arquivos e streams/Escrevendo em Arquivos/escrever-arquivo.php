<?php

	// o ultimo parametro indica o modo de aberto, para outros, verificar documentação
	$arquivo = fopen('cursos-php.txt', 'a');

	// \n irá colocar quebra de linha para ficar com primeira linha em branco e inserir novos itens
	$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

	// ultimo parametro indica quantidade de caracter que iá escrever no arquivo
	// fwrite($arquivo, $curso, 21);

	fwrite($arquivo, $curso);

	fclose($arquivo);