<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function register(){
        $menu = [
            ['href' => 'site.index', 'descricao' => 'Home'],
            ['href' => 'site.contato', 'descricao' => 'Contato'],
            ['href' => 'site.login', 'descricao' => 'Login']
        ];
        return view('site.register', compact('menu'));
    }

    public function recover(){
        $menu = [
            ['href' => 'site.index', 'descricao' => 'Home'],
            ['href' => 'site.contato', 'descricao' => 'Contato'],
            ['href' => 'site.login', 'descricao' => 'Login'],
            ['href' => 'site.register', 'descricao' => 'Registra-se']
        ];
        return view('site.recover', compact('menu'));
    }

    public function login(){
        $menu = [
            ['href' => 'site.index', 'descricao' => 'Home'],
            ['href' => 'site.contato', 'descricao' => 'Contato'],
            ['href' => 'site.register', 'descricao' => 'Registra-se']
        ];
        return view('site.login', compact('menu'));
    }

    public function logout(){
    }


}
