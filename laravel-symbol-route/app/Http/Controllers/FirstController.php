<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
          $name = 'Classe 12';
           
          return view('blog.index', ['name' => $name]);
    }

    public function class(){
        return 20*3;
    }
}
