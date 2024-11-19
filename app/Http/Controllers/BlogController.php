<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function post($locale, $slug)
    {
        return view('blog.post', ['slug' => $slug]);
    }
}
