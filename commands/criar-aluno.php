<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ .'/../vendor/autoload.php';

$aluno = new Aluno();
//argv é apenas para pegar o nome via cmd
$aluno->setNome($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

//observa a entidade mas ainda não insere no banco
$entityManager->persist($aluno);

//salva a entidade no banco
$entityManager->flush();