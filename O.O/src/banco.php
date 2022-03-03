<?php

require_once 'Conta.php';
require_once 'Titular.php';

$primeiraconta = new Conta(new Titular('123.465.789-10', 'Fabio Silva'));
$primeiraconta->deposita(500);
$primeiraconta->saca(300);

echo $primeiraconta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraconta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraconta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('321.654.987-10', 'Patricia'));
var_dump($segundaConta);

$outra = new Conta(new Titular('123.654.789-10', 'Felipe'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
