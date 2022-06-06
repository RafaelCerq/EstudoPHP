<?php

	$arquivo = fopen('lista-cursos.txt', 'r');

	// Obs. tamanho máximo de arquivo que pode ser lido é 128mb
	$tamanhoDoArquivo = filesize('lista-cursos.txt');
	$cursos = fread($arquivo, $tamanhoDoArquivo);

	echo $cursos;

	//Fechar arquivo
	fclose($arquivo);