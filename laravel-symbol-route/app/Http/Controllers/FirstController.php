<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
          $name = 'Classe 12';
           
          return view('about');
    }
}
