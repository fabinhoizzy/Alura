<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Entity\Curso;

/**
 * @var \Doctrine\ORM\EntityManagerInterface $entityManager
 */

class Exclusao implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    /**
     * @throws \Doctrine\ORM\ORMException
     */
    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (is_null($id) || $id === false) {
            $this->defineMensagem('danger', 'Curso inexistente');
            header('Location: /listar-cursos');
            return;
        }

        $curso = $this->entityManager->getReference(Curso::class, $id);
        $this->entityManager->remove($curso);
        $this->entityManager->flush();
        $this->defineMensagem('sucess', 'Curso excluído com sucesso');
        header('Location: /listar-cursos');
    }
}