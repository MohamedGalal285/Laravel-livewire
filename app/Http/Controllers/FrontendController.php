<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function contact(){
        return view('home.contact');
    }
    public function archive(){
        return view('home.archive');
    }
    public function menu(){
        return view('home.menu');
    }
    public function single(){
        return view('home.single');
    }
}
