<?php

	use Alura\Doctrine\Entity\Aluno;
	use Alura\Doctrine\Entity\Telefone;
	use Alura\Doctrine\Helper\EntityManagerFactory;

	require_once __DIR__ . '/../vendor/autoload.php';

	$entityManagerFactory = new EntityManagerFactory();
	$entityManager = $entityManagerFactory->getEntityManager();

	$alunoRepository = $entityManager->getRepository(Aluno::class);

	// /** @var Aluno[] $alunoList */
	// $alunoList = $alunoRepository->findAll();

	$dql = "SELECT aluno FROM Alura\\Doctrine\\Entity\\Aluno aluno WHERE aluno.id = 1 OR aluno.nome = 'Nico Steppat' ORDER BY aluno.nome";
	$query = $entityManager->createQuery($dql);
	$alunoList = $query->getResult();

	foreach ($alunoList as $aluno) {
		$telefones = $aluno
			->getTelefones()
			->map(function (Telefone $telefone) {
				return $telefone->getNumero();
			})
			->toArray();
		echo "ID: {$aluno->getId()}\nNome: {$aluno->getNome()}\n";
		echo "Telefones: " . implode(', ', $telefones);

		echo "\n\n";
	}

	/*
	$nico = $alunoRepository->find(4);
	echo $nico->getNome() . "\n\n";

	$sergioLopes = $alunoRepository->findBy([
		'nome' => 'Sergio Lopes'
	]);

	var_dump($sergioLopes);
	*/
