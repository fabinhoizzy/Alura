<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use Alura\DesignPattern\Orcamento;

class Reprovado
{
    public function calcularDescontoExtra(Orcamento $orcamento)
    {
        throw new \DomainException(
            'O Orçamento reprovado não pode receber desconto'
        );
    }
}