<?php

require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new \Alura\Doctrine\Helper\EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

var_dump($entityManager->getConnection());