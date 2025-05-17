<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function Index(){
        return Inertia::render('Index/Index');
    }

    public function About(){
        return Inertia::render('Index/AboutPage');
    }
}
