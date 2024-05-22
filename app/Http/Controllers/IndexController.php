<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $menu = [
            ['href' => 'site.index', 'descricao' => 'Home'],
            ['href' => 'site.contato', 'descricao' => 'Contato'],
            ['href' => 'site.login', 'descricao' => 'Login'],
            ['href' => 'site.register', 'descricao' => 'Registrar-se']
        ];
        return view('site.index', compact('menu'));
    }

    public function redirect(){
    }
}
