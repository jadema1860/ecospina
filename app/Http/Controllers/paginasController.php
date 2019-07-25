<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginasController extends Controller
{
    public function index()
    {
        return view('nosotros');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function proyectos()
    {
        return view('proyectos');
    }

    public function contactos()
    {
        return view('contactos');
    }
}
