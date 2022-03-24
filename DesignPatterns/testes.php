<?php


use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadorDeDesconto;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';
/*
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());
*/

$calculadora = new CalculadorDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calcularDescontos($orcamento);
