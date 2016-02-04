<?php namespace CodeCommerce\Http\Controllers;

class WelcomeController extends Controller{

    /** Create a new controller instance... */

    /**
     * Show de page Welcome to the user
     */

    public function index()
    {
        return view('welcome');
    }

    public function exemplo()
    {
        $nome = 'Leo';
        $sobrenome = 'Silva';

        return view('exemplo', compact('nome', 'sobrenome'));
    }
}