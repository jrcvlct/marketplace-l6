<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //verifica se o usuario esta logado ou nao
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}











/*
Middlewares: Dentro de aplicações web, ele é um código ou programa que é executado entre a requisição(Request) e a nossa aplicação (é a lógica executado pelo acesso a uma determianda rota)

Request-> Aplicação (Acesso qualquer rota) <- Marketplace

*/













