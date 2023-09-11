<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('main.about'); // Lembre-se de criar a visualização projects/index.blade.php
    }
}
