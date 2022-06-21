<?php

	use Alura\Doctrine\Entity\Aluno;
	use Alura\Doctrine\Helper\EntityManagerFactory;

	require_once __DIR__ . '/../vendor/autoload.php';

	$entityManagerFactory = new EntityManagerFactory();
	$entityManager = $entityManagerFactory->getEntityManager();

	$alunoRepository = $entityManager->getRepository(Aluno::class);

	/** @var Aluno[] $alunoList */
	$alunoList = $alunoRepository->findAll();

	foreach ($alunoList as $aluno) {
		echo "ID: {$aluno->getId()}\nNome: {$aluno->getNome()}\n\n";
	}

	$nico = $alunoRepository->find(4);
	echo $nico->getNome() . "\n\n";

	$sergioLopes = $alunoRepository->findBy([
		'nome' => 'Sergio Lopes'
	]);

	var_dump($sergioLopes);
