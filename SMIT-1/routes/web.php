<?php

use App\Http\Controllers\UserController;

// Rota para exibir o formulário
Route::get('/hello', function () {
    return view('hello');  // O arquivo de view pode ser 'resources/views/hello.blade.php'
});

// Rota para processar os dados do formulário
Route::post('/hello', [UserController::class, 'store']);
