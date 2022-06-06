<?php

	// \n irá colocar quebra de linha para ficar com primeira linha em branco e inserir novos itens
	$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

	// caso necessite colocar mais flags de atributos, pode separar com |
	// file_put_contents('cursos-php.txt', $curso, FILE_APPEND | FILE_TEXT);
	
	file_put_contents('cursos-php.txt', $curso, FILE_APPEND);