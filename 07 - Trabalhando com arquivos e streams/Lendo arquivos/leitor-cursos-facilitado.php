<?php

	$cursos = file_get_contents('lista-cursos.txt');

	echo $cursos;
	
	
	// le o arquivo todo e coloca cada linha em uma array
	$cursos = file('lista-cursos.txt');

	var_dump($cursos);