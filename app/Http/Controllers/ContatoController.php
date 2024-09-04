<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contato;

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

    public function salvar(Request $request){

$request->validate([
    'nome' => 'required|min:3|max:50',
    'email' => 'email',
    'motivo' => 'required',
    'mensagem' => 'required|max:200'
]);

        $contato = new Contato();
        $contato->email = $request->input('email');
        $contato->nome = $request->input('nome');
        $contato->mensagem = $request->input('mensagem');
        $contato->motivo = $request->input('motivo');

        if($contato->motivo == "Selecione um motivo..."){
            $msg = 'Campo motivo vazio, insira valor válido!';
            return redirect()->route('site.contato')->with('msg', $msg)->with('contato', $contato);
        }else{
            $contato->save();
            // $contato->create($request->all());
            return redirect()->route('site.contato');
        }

    }
}
