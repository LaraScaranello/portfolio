<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static fn() => view('home'));

Route::get('/projetos', static function () {
    $projetos = [
        [
            'slug' => 'loja-cosmeticos',
            'nome' => 'Loja de Cosméticos',
            'descricao' => 'E-commerce completo com carrinho e checkout'
        ],
    ];

    return view('projetos.index', compact('projetos'));
});
