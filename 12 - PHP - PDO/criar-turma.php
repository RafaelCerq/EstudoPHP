<?php

	use Alura\Pdo\Domain\Model\Student;
	use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
	use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

	require_once 'vendor/autoload.php';

	$connection = ConnectionCreator::createConnection();
	$studentRepository = new PdoStudentRepository($connection);

	// processos de definição da turma
	$connection->beginTransaction();

	try {
		$aStudent = new Student(
			null,
			'Julio Araujo',
			new DateTimeImmutable('1985-05-01'),
		);
		$studentRepository->save($aStudent);

		$anotherStudent = new Student(
			null,
			'Sergio Silva',
			new DateTimeImmutable('1985-05-01'),
		);
		$studentRepository->save($anotherStudent);

		$connection->commit();
	} catch (\PDOException $e) {
		echo $e->getMessage();
		$connection->rollBack();
	}

