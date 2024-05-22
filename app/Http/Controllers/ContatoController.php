<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        $menu = [
            ['href' => 'site.index', 'descricao' => 'Home'],
            ['href' => 'site.login', 'descricao' => 'Login'],
            ['href' => 'site.register', 'descricao' => 'Registra-se']
        ];
        return view('site.contato', compact('menu'));
    }
}
