<?php
	// Representando um arquivo em um objeto
	
	$arquivoCursos = new SplFileObject('cursos.csv');

	while (!$arquivoCursos->eof()) {
		$linha = $arquivoCursos->fgetcsv(';');

		echo utf8_encode($linha[0]) . PHP_EOL;
	}


	// mostrar a data que o arquivo foi criado
	$date = new DateTime();
	$date->setTimestamp($arquivoCursos->getCTime());

	echo $date->format('d/m/Y') . PHP_EOL;
	
	//Tamanho do arquivo
	echo $arquivoCursos->getSize() . PHP_EOL;