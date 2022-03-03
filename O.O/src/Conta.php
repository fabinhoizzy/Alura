<?php

class Conta
{
    private string $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(string $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        //Conta::$numeroDeContas++; Usamos o self para substituir o nome da classe Conta
        self::$numeroDeContas++;
    }

    public function saca(float $valorASacar) : void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar) : void
    {
        if( $valorADepositar < 0) {
            echo 'Valor precisa ser positivo';
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo() : float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular() : String
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular() : String
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }
}