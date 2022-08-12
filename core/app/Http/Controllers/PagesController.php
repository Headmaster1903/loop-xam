<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexhome()
    {
        return view ('index');
    }

    public function about()
    {
        return view ('about');
    }

    public function plans()
    {
        return view ('plans');
    }

    public function readmore()
    {
        return view ('readmore');
    }

    public function contact()
    {
        return view ('contact');
    }
    
    public function news()
    {
        return view ('news');
    }
}
