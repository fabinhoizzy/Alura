<?php

namespace Alura\Solid\Model;

class AluraLive implements Pontuavel, Assistivel
{
    public function recuperaPontuação(): int
    {
        return 200;
    }

    public function assistir(): void
    {
        // TODO: Implement assistir() method.
    }
}