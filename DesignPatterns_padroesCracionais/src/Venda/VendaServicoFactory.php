<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Iss;

class VendaServicoFactory implements VendaFactory
{
    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): imposto
    {
        return new Iss();
    }
}