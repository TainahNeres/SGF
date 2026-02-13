<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
/*aqui estamos retornando uma view. no arquivo, a função index é a única existente. então,
quando estamos na url /, ele vai retornar a view home automaticamente. assim, o fluxo é rota, controller, view*/
    public function index()
    {
        return view('home');
    }
}
