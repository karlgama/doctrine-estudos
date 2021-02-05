<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ .'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];
//getReference pega uma referencia de aluno somente com id, para evitar executar o select no banco, ganhando performance
$aluno = $entityManager->getReference(Aluno::class, $id);

$entityManager->remove($aluno);
$entityManager->flush();