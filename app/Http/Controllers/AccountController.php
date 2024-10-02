<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Usuario;

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

    public function registerUser(Request $request){
        $user = new Usuario();
        $user->email = $request->input('email');
        if($request->input('senha1') == $request->input('senha2')){
            $user->senha = $request->input('senha1');
        }
        $user->hash = $request->input('_token');
        $user->save();
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
