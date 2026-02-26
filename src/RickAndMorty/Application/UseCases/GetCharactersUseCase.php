<?php

namespace RickAndMorty\Application\UseCases;

use RickAndMorty\Domain\Contracts\RickAndMortyApiContract;
use RickAndMorty\Domain\Lists\CharacterList;

readonly class GetCharactersUseCase
{
    public function __construct(
        private RickAndMortyApiContract $rickAndMortyApi,
    ) {}


    public function __invoke(): CharacterList
    {
        return $this->rickAndMortyApi->getCharacters();
    }
}
