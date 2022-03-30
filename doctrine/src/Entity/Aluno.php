<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 */

class Aluno
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;

    /**
     * @Column (type="string")
     */
    private string $nome;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

}