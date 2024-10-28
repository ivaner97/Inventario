<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $vistas = view('header').
                  view('menu').
                  view('compras/tabla'). //aqui la vista que se utilizará
                  view('footer');
        return $vistas;
    }
    public function welcome(): string
    {
        return view('welcome_message');
    }
}
