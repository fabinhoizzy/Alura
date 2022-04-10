<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

/**
 * @property \Doctrine\ORM\EntityRepository|\Doctrine\Persistence\ObjectRepository $repositorioCursos
 */
class FormularioEdicao  implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();

        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (is_null($id) || $id === false) {
            header('Location: /listar-cursos');
            return;
        }

        $curso = $this->repositorioCursos->find($id);
        echo $this->renderizaHtml('cursos/formulario.php', [
            'cursos' => $curso,
            'titulo' => 'Alterar Curso ' . $curso->getDescricao()
        ]);
    }
}