<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('main.contact'); // Lembre-se de criar a visualização projects/index.blade.php
    }
}

