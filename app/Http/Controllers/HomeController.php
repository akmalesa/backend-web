<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['title' => 'Dashboard']);
    }
    public function contact()
    {
        return view('contact');
    }
    public function profile()
    {
        return view('profile');
    }
    public function faq()
    {
        return view('faq');
    }
}
