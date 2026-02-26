<?php

namespace RickAndMorty\Infrastructure\External;


use Illuminate\Support\Facades\Http;
use RickAndMorty\Domain\Contracts\RickAndMortyApiContract;
use RickAndMorty\Domain\Entities\Character;
use RickAndMorty\Domain\Lists\CharacterList;

class RickAndMortyApiAdapter implements RickAndMortyApiContract
{
    public function getCharacters(): CharacterList
    {
        $baseUrl = env('RICK_AND_MORTY_URL');
        if (!str_ends_with($baseUrl, '/')) {
            $baseUrl .= '/';
        }

        $response = Http::get($baseUrl . 'api/character');
        $data = $response->json();

        $characterList = new CharacterList();


        foreach ($data['results'] as $item) {



            $character = new Character(
                $item['id'],
                $item['name'],
                $item['status'],
                $item['image'],
            );

            $characterList->addCharacter($character);
        }

        return $characterList;
    }
}
