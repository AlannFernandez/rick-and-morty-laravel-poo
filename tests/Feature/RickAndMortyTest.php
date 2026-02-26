<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class RickAndMortyTest extends TestCase
{
    /**
     * Test que verifica que la home devuelve los datos de la API.
     */
    public function test_home_returns_api_data(): void
    {
        // Simulamos la respuesta de la API
        $fakeData = [
            'results' => [
                ['id' => 1, 'name' => 'Rick Sanchez'],
                ['id' => 2, 'name' => 'Morty Smith'],
            ]
        ];

        Http::fake([
            'rickandmortyapi.com/*' => Http::response($fakeData, 200),
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertJson($fakeData);
    }
}
