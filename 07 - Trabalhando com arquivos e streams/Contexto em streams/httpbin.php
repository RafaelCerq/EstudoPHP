<?php

	echo file_get_contents('http://httpbin.org/get');
	
	echo PHP_EOL;
	
	$contexto = stream_context_create([
		'http' => [
			'method' => 'DELETE',
			'header' => 'X-Form: PHP'
		]
	]);

	echo file_get_contents('http://httpbin.org/delete', false, $contexto);

	echo PHP_EOL;

	$contexto = stream_context_create([
		'http' => [
			'method' => 'POST',
			'header' => "X-Form: PHP\r\nContent-Type: text/plain",
			'content' => 'Corpo da Requisição'
		]
	]);

	echo file_get_contents('http://httpbin.org/post', false, $contexto);