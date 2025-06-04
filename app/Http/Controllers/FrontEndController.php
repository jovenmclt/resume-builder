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

    public function Features(){
        return Inertia::render('Index/FeaturesPage');
    }

    public function Templates(){
        return Inertia::render('Index/TemplatesPage');
    }

    public function Template_1(){
        return Inertia::render('Index/Template1');
    }
}
