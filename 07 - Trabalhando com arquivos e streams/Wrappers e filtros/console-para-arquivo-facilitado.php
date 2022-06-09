<?php

	$novoCurso = trim(fgets(STDIN));

	file_put_contents('cursos-php-console.txt', "\n$novoCurso", FILE_APPEND);