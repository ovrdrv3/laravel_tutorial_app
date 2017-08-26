<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $about = 'About us';
        return view('pages.about')->with('about', $about);

    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Gardening', 'Cleaning', 'SEO']

        );
        return view('pages.services')->with($data);
    }

}
