<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RickAndMortyController extends Controller
{
    public function index()
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
