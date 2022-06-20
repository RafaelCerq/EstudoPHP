<?php

	use Alura\Pdo\Domain\Model\Student;

	require_once 'vendor/autoload.php';

	$databasePath = __DIR__ . '/banco.sqlite';
	$pdo = new PDO('sqlite:' . $databasePath);

	$student = new Student(
		null,
		'João Guilherme',
		new \DateTimeImmutable('2001-01-01')
	);
	$name = $student->name();

	$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
	$statement = $pdo->prepare($sqlInsert);
	$statement->bindParam(':name', $student->name());
	$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

	if ($statement->execute()) {
		echo "Aluno incluído";
	}
