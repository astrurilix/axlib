<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PublicController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function category()
    {
        $filter = Input::get('filter');
        return view('category');
    }

    public function myLibrary()
    {
        return view('myLibrary');
    }
}
