<?php

use Illuminate\Support\Facades\Route;
use RickAndMorty\Infrastructure\Controllers\GetCharactersControllers;

Route::get('/', GetCharactersControllers::class);
