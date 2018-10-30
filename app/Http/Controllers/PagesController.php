<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index', ['title' => 'Food Website']);
    }
    public function about()
    {
        return view('pages.about', ['title' => 'About Page']);
    }
    public function book()
    {
        return view('pages.book', ['title' => 'Name of Book']);
    }
}
