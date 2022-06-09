<?php

	$contexto = stream_context_create([
		'zip' => [
			'password' => '1234'
		]
	]);

	echo file_get_contents('zip://arquivos.zip#lista-cursos.txt', false, $contexto);