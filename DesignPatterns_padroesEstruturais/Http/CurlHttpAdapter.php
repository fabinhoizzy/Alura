<?php

namespace Alura\DesignPattern\Http;

class CurlHttpAdapter implements \Alura\DesignPattern\Http\HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, $data);

        curl_exec($curl);
    }
}