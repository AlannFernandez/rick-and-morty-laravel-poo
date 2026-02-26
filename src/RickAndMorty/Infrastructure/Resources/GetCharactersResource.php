<?php

namespace RickAndMorty\Infrastructure\Resources;

use RickAndMorty\Domain\Lists\CharacterList;

class GetCharactersResource
{

    public static function toArray(CharacterList $characterList): array
    {
        $characters = $characterList->getAll();

        if (empty($characters)) {
            return [];
        }

        return array_map(function ($character) {
            return [
                'id'     => $character->id,
                'nombre' => $character->name,
                'estado' => $character->status,
                'imagen' => $character->image,
            ];
        }, $characters);
    }
}
