<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';
//adicionado o gerenciador de entidades que criamos
$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$idAluno = $argv[1]; //pegando o primeiro argumento na linha de comando
$idCurso = $argv[2]; //pegando o segundo argumento na linha de comando

//** @var Curso $curso */
$curso = $entityManager->find(Curso::class, $idCurso);
//** @var Aluno $aluno */
$aluno = $entityManager->find(Aluno::class, $idAluno);

$curso->addAluno($aluno);

$entityManager->flush();
