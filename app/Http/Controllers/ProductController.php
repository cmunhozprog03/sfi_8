<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $fruits = array ('Manga', 'Laranja', 'Banana', 'Maçã', 'Abacaxi');
        return view('welcome', compact('fruits'));
    }
}
