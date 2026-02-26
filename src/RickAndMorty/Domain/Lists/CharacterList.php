<?php

namespace RickAndMorty\Domain\Lists;




use RickAndMorty\Domain\Entities\Character;

class CharacterList
{
    private array $characters = [];

    public function addCharacter(Character $character): void
    {
        $this->characters[] = $character;
    }

    public function getAll(): array
    {
        return $this->characters;
    }
}
