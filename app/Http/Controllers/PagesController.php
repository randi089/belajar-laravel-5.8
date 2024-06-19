<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Randi Febriadi']);
    }
}
