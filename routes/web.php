<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    echo "Conteudo dinamico Home";
});

Route::get('/sobre', function () {
    $soma = 10 + 9;
    echo "Conteudo dinamico Sobre $soma";
});

Route::get('/contato', function () {
    echo "Conteudo dinamico Contato";
});

Route::get('/servicos', function () {
    echo "Conteudo dinamico Servicos";
});