<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class Finalizado
{
    public function calcularDescontoExtra(Orcamento $orcamento)
    {
        throw new \DomainException(
            'O Orçamento finalizado não pode receber desconto'
        );
    }

}