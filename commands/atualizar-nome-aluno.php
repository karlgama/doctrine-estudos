<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ .'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);

$id = $argv[1];

/** @var string $novoNome */
$novoNome = $argv[2];

//também é possível usar o método find do entity manager sem precisar do repository, porém só trás uma por vez
/** @var Aluno $aluno */
$aluno = $alunoRepository->find($id);
$aluno->setNome($novoNome);

$entityManager->flush();