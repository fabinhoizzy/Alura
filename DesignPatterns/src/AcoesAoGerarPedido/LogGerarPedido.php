<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido
{
    public function executeAcao(Pedido $pedido): void
    {
        echo "Gerando log do Pedido";
    }
}