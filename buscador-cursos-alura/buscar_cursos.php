<?php

use GuzzleHttp\Client;

$client = new Cliente();
$client->request('GET', 'https://www.alura.com.br/formacao-desenvolvedor-php');