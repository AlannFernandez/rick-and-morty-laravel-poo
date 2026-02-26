<?php

namespace RickAndMorty\Application\UseCases;

use Illuminate\Support\Facades\Http;
use RickAndMorty\Domain\Contracts\RickAndMortyApiContract;

class GetCharacterUseCase
{
    public function __construct(
        private readonly RickAndMortyApiContract $rickAndMortyApi,
    )
    {
    }
    public function execute()
    {
        return $this->rickAndMortyApi->getCharacters();
    }
   
}