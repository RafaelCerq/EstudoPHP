<?php

	use Alura\Doctrine\Entity\Aluno;
	use Alura\Doctrine\Helper\EntityManagerFactory;

	require_once __DIR__ . '/../vendor/autoload.php';

	$aluno = new Aluno();
	$aluno->setNome('João');

	$entityManagerFactory = new EntityManagerFactory();
	$entityManager = $entityManagerFactory->getEntityManager();

	$entityManager->persist($aluno);
	$aluno->setNome('João Silva');

	$entityManager->flush();
