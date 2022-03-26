<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class Aprovado
{
    public function calcularDescontoExtra(Orcamento $orcamento)
    {
        return $orcamento->valor * 0.02;
    }
}