<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;



    public function valor(): float
    {
        return array_reduce($this->itens, function ($valorAcumulado, ItemOrcamento $itemAtual) {
            return $valorAcumulado + $itemAtual->valor;
        }, 0);
    }
}