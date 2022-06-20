<?php

	use Alura\Pdo\Domain\Model\Student;

	require_once 'vendor/autoload.php';

	$student = new Student(
		null,
		'João Guilherme',
		new \DateTimeImmutable('1997-10-15')
	);

	echo $student->age();
