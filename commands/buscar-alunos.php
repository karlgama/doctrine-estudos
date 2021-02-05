<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ .'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/**
 * @var Aluno[] $alunoList
 */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno){
    echo "ID: " . $aluno->getId() . "\n";
    echo "Nome: " . $aluno->getNome() . "\n\n";
}

/*
 * public function findBy(
 *    array $criteria,
 *    ?array $orderBy = null,
 *    ?int $limit = null,
 *    ?int $offset = null
 *)
 *
 * $criteria: Critério de busca. Array vazio significa sem critério, ou seja, sem filtro, buscando todos os registros;
 * $orderBy: Critério de ordenação. Um array onde as chaves são os campos, e os valores são 'ASC' para ordem crescente e 'DESC' para decrescente;
 * $limit: Numéro de resultados para trazer do banco;
 * $offset: A partir de qual dado buscar do banco. Muito utilizado para realizar paginação de dados.
 * */