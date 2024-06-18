<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Randi Febriadi']);
    }
}
