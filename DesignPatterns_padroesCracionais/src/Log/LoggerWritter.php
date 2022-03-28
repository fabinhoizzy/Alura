<?php

namespace Alura\DesignPattern\Log;

interface LoggerWritter
{
    public function escreve(string $mensagemFormatada): void;
}