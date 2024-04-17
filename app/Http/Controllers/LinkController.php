<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function generate(){
        return view('app.generate');
    }

    public function remove(){
        return view('app.remove');
    }

    public function list(){
        return view('app.list');
    }
}
