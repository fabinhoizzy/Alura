<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class EmAprovacao
{
    public function calcularDescontoExtra(Orcamento $orcamento)
    {
        return $orcamento->valor * 0.05;
    }

    public function aprovado(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado();
    }
}