<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller {
    public function home() {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }

    public function skill() {
        return view('skill');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
}
