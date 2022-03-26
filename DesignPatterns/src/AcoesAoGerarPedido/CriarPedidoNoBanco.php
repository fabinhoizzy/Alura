<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco
{
    public function executeAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados";
    }
}