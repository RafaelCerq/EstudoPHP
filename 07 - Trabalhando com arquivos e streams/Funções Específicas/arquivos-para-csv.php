<?php

	$meusCursos = file('lista-cursos.txt');
	$outrosCursos = file('cursos-php.txt');

	$arquivoCsv = fopen('cursos.csv', 'w');

	foreach ($meusCursos as $curso) {
		$linha = [trim(utf8_decode($curso)), 'Sim'];

		//fwrite($arquivoCsv, implode(',', $linha));
		fputcsv($arquivoCsv, $linha, ';');
	}

	foreach ($outrosCursos as $curso) {
		$linha = [trim(utf8_decode($curso)), utf8_decode('Não')];

		fputcsv($arquivoCsv, $linha, ';');
	}

	fclose($arquivoCsv);