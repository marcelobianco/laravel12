<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


// Criar uma rota chamada contact e retornar uma view chamada contact

/*
    GET = Index = Traz informações
    POST = Create = Criar Informações
    PUT = Update = Atualizar Informações
    PATCH = Update = Atualizar uma parte da informação
    DELETE = Delete = Deletar Informações
*/