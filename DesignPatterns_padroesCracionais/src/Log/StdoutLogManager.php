<?php

namespace Alura\DesignPattern\Log;

class StdoutLogManager extends LogManager
{

    public function criarLogWritter(): LoggerWritter
    {
        return new StdoutLogWritter();
    }
}