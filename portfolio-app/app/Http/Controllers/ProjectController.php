<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('main.projects'); // Lembre-se de criar a visualização projects/index.blade.php
    }

    public function nocode()
    {
        return view('main.nocodeprojects'); // Lembre-se de criar a visualização projects/index.blade.php
    }
}

