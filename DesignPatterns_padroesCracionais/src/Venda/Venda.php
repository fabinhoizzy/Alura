<?php

namespace Alura\DesignPattern\Venda;

class Venda
{
    public \DateTimeInterface $dateTimeImmutable;

    public function __construct(\DateTimeInterface $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}