<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdapter implements \Alura\DesignPattern\Http\HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        //instacio o react php
        //preparo os dados
        //faço a requisição
        echo "ReactPHP";
    }
}