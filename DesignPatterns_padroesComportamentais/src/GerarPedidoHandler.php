<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;
use SplObserver;

class GerarPedidoHandler implements \SplSubject
{
    /** @var SplObserver[] */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;

    public function __construct()
    {
    }


    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        $this->pedido = $pedido;
        $this->notify();

    }

    public function attach(SplObserver $observer): void
    {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        // TODO: Implement detach() method.
    }

    public function notify(): void
    {
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}