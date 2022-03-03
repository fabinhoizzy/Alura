<?php

class Titular
{
    private string $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
        $this->endereco = $endereco;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo 'Nome com menos de 5 caracter';
            exit();
        }
    }

    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }


}