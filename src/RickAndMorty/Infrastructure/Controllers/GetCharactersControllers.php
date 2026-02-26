<?php

namespace RickAndMorty\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use RickAndMorty\Application\UseCases\GetCharactersUseCase;
use RickAndMorty\Infrastructure\Resources\GetCharactersResource;

class GetCharactersControllers extends Controller
{
    public function __construct(
        private readonly GetCharactersUseCase $getCharactersUseCase
    ) {}


    public function __invoke(): JsonResponse
    {

        $useCase = $this->getCharactersUseCase->__invoke();

        return response()->json(
            GetCharactersResource::toArray($useCase)
        );
    }
}
