<?php

use App\Http\Controllers\UserController;

// ROTAS DO USUARIO/CLIENTE //
Route::get('/', function () {
    return view('Cadastro');  //FELIPE
});

Route::post('/Cadastro', [UserController::class, 'store']);

route::get('/perfil', function () {
    return view('perfil_Usuario'); //FELIPE
});

Route::get('/pagina-Home', function () {
    return view('home_Usuario'); //GUSTAVO
});

route::get('/Loja', function () {
    return view('Loja'); //GUSTAVO E FELIPE
});

route::get('/produto', function () {
    return view('produto'); //GUSTAVO
});

// ROTAS DO ADMINISTRADOR //
Route::get('/home_Admin', function () {
    return view('home_Admin'); // FELIPE 
});

route::get('/estoque', function () {
    return view('estoque'); //GUSTAVO
});

route::get('/criar produto ', function () {
    return view('criar_produto'); //GUSTAVO
});

route::get('/View usuario ', function () {
    return view('Visualizar_Usuario'); //FELIPE
});


