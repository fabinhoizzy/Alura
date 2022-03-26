<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail
{
    public function executeAcao(Pedido $pedido): void
    {
        echo "Enviado e-mail de pedido gerado";
    }
}