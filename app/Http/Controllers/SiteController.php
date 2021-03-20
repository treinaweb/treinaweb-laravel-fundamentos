<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * mostra a página home
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Mostra a página de sobre
     *
     * @return void
     */
    public function sobre()
    {
        $soma = 10 + 9;
        echo "Conteudo dinamico Sobre $soma";
    }

    /**
     * Mostra a página de contato
     *
     * @return void
     */
    public function contato()
    {
        echo "Conteudo dinamico Contato";
    }

    /**
     * Mostra a página de serviços
     *
     * @return void
     */
    public function servicos()
    {
        echo "Conteudo dinamico Servicos";
    }

    /**
     * Mostra um serviço por id
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'descricao muito longa...'
            ],
            2 => [
                'nome' => 'Lavagem de Corberta',
                'descricao' => 'descricao muito longa...'
            ],
            3 => [
                'nome' => 'Lavagem de Urso',
                'descricao' => 'descricao muito longa...'
            ],
        ];
    
        return view('site.servico', [
            'servico' => $servicos[$id],
            'outro' => 'treinaweb'
        ]);
    }
}
