<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title="MediPlus Website";
        return view('home', compact('title'));
    }

    public function contactUs(){
        $title = "Contact Us";
        return view('contactUs', compact('title'));
    }
}
