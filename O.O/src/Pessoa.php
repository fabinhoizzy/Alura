<?php

class Pessoa
{
    public string $nome;
    public string $cpf;

    public function __construct(string $nome,string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
    }


    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo 'Nome com menos de 5 caracter';
            exit();
        }
    }

    public function recuperaNome() : string
    {
        return $this->nome;
    }

    public function recuperaCpf() : CPF
    {
        return $this->cpf->recuperaNumero();
    }




}