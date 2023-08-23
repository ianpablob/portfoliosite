<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view("welcome");
    }

    public function contact() {
        return view("main.contact");
    }

    public function projects() {
        return view("main.projects");
    }

    public function about() {
        return view("main.about");
    }

    public function nocodeprojects() {
        return view("main.nocodeprojects");
    }
}
