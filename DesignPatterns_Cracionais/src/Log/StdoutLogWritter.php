<?php

namespace Alura\DesignPattern\Log;

class StdoutLogWritter implements LoggerWritter
{

    public function escreve(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }

    public function log(string $string, string $string1)
    {
    }
}