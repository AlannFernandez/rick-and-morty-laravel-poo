<?php

namespace RickAndMorty\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use RickAndMorty\Application\UseCases\GetCharactersUseCase;
use RickAndMorty\Infrastructure\Resources\GetCharactersResource;

class GetCharactersControllers extends Controller
{
    public function __construct(
        private readonly GetCharactersUseCase $getCharactersUseCase
    ) {}


    public function __invoke(): View
    {

        $characterList = $this->getCharactersUseCase->__invoke();

        return view('characters.index', [
            'characters' => GetCharactersResource::toArray($characterList)
        ]);
    }
}
