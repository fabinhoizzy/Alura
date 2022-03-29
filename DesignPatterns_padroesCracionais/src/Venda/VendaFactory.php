<?php

namespace Alura\DesignPattern\Venda;

interface VendaFactory
{
    public function criarVenda(): venda;
    public function imposto(): imposto;
}