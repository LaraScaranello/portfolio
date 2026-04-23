<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static fn() => view('welcome'));

Route::get('/projetos/itcloud', static function () {
    return view('projetos.itcloud');
});
