<?php

namespace Alura\DesignPattern;

use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
    /**
     * @var $orcamento[]
     */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->orcamentos);
    }
}