<?php

namespace Alura\DesignPattern;

use function PHPUnit\Framework\throwException;

class Orcamento
{
    public float $valor;
    public int $quantidadeItens;
    public string $estadoAtual;

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->calcularDescontoExtra();
    }

    public function calcularDescontoExtra(): float
    {
        if($this->estadoAtual == 'EM_APROVACAO'){
            return $this->valor * 0.05;
        }

        if($this->estadoAtual == 'APROVADO'){
            return $this->valor *0.02;
        }

        throw new \DomainException(
            'Orçamento reprovados e finalizados não podem receber desconto'
        );

    }

}