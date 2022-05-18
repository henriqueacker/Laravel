<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
   
    public function index(Request $request){
        
        $data = [
            'id'=> $request->id
        ];
        return view('login',$data);
    }

    public function exibirNome(){
        $nome = "teste";
        $data = [
            'nome'=> $nome
        ];
        return view('home',$data);
    }
 
 }
