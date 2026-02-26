<?php

namespace RickAndMorty\Infrastructure\External;

use Illuminate\Support\Facades\Http;
use RickAndMorty\Domain\Contracts\RickAndMortyApiContract;

class RickAndMortyApiAdapter implements RickAndMortyApiContract
{
    public function getCharacters()
    {
        $baseUrl = env('RICK_AND_MORTY_URL');
        // Asegurarse de que termine en / para concatenar
        if (substr($baseUrl, -1) !== '/') {
            $baseUrl .= '/';
        }

        // Llamada a la API para obtener personajes
        $response = Http::get($baseUrl . 'api/character');

        return $response->json();
    }
}