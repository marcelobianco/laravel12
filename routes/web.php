<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

/*
    GET = Index = Traz informações
    POST = Create = Criar Informações
    PUT = Update = Atualizar Informações
    PATCH = Update = Atualizar uma parte da informação
    DELETE = Delete = Deletar Informações
*/