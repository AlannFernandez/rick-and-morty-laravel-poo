<?php

namespace RickAndMorty\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RickAndMorty\Application\UseCases\GetCharacterUseCase;

class GetCharacterControllers extends Controller
{
    public function index()
    {
        $useCase = app(GetCharacterUseCase::class);
        $characters = $useCase->execute();
        return response()->json($characters);
    }
}

