<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Escola $escola)
   {
     $escolas = $escola->all();

     return view('home', compact('escolas'));
   }
   public function login()
   {
     $title ='SGERPEB - Login';

     return view('painel.home.login', compact('title'));
   }
}
