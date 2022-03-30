<?php

namespace Alura\DesignPattern\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{

    public function constroi(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valor();

        $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.2;

        return $this->notaFiscal;
    }
}