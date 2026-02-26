<?php

namespace RickAndMorty\Domain\Contracts;

use RickAndMorty\Domain\Lists\CharacterList;

interface RickAndMortyApiContract
{
    public function getCharacters(): CharacterList;
}
