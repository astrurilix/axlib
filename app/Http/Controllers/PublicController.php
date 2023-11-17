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

    public function category(Request $request)
    {
        $filter = $request->filter;
        return view('category', [
            'filter' => $filter
        ]);
    }

    public function myLibrary()
    {
        return view('myLibrary');
    }
}
