<?php

namespace Alura\DesignPattern\Log;

class StdoutLogWritter implements LoggerWritter
{

    public function escreve(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}