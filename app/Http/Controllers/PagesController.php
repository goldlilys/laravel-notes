<?php

namespace App\Http\Controllers;

/* Each static page gets its own method in this Dedicated Controller */
class PagesController extends Controller
{
    public function home()
    {
        $notes = [
            'Go to store',
            'Go to market',
            'Go to work',
        ];

        return view('welcome', ['notes' => $notes]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
