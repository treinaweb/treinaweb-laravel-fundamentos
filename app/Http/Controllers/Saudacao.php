<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param string $nome
     * @return void
     */
    public function __invoke(string $nome = 'Treinaweb')
    {
        echo "Ola $nome";
    }
}
