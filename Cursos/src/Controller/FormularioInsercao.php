<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\FlashMessageTrait;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;

    public function processaRequisicao():void
    {
       echo $this->renderizaHtml('cursos/formulario.php', [
            'titulo' => 'Novo Curso'
        ]);
    }
}