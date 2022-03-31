<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Icms;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;

    public function __construct(int $pesoProduto)
    {

        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->peso);
    }

    public function imposto(): imposto
    {
        return new Icms();
    }
}