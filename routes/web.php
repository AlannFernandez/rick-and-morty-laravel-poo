<?php

use Illuminate\Support\Facades\Route;
use RickAndMorty\Infrastructure\Controllers\GetCharacterControllers;

Route::get('/', [GetCharacterControllers::class, 'index']);
