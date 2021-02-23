<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ .'/../vendor/autoload.php';

$aluno = new Aluno();
//argv é apenas para pegar o nome via cmd
$aluno->setNome($argv[1]);
$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

for ($i = 2; $i < $argc; $i++) {
    $numeroTelefone = $argv[$i];
    $telefone = new Telefone();
    $telefone->setNumero($numeroTelefone);

//     usando o cascade no model podemos eliminar está linha
//    $entityManager->persist($telefone);

    $aluno->addTelefone($telefone);
}



//observa a entidade mas ainda não insere no banco
$entityManager->persist($aluno);

//salva a entidade no banco
$entityManager->flush();