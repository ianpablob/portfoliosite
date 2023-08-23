@extends('layouts.app')
@section('content')

<div class="header-container">
  <header>
  
    <div class="logo">
      <img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 50px; height: 50px;">
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="#Dashboard">Dashboard</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('projects') }}">Projects</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>
      </ul>
    </nav>
  </header>
</div>
<section id="Dashboard">
  <div class="Presentation">
    <p class="line anim-typewriter">Welcome! My name is Ian Borges.</p>
  </div>
  <div class="mypic">
    <img src="{{ url('/images/profile.jpeg')}}" alt="foto" style="width: 200px; height: 200px;">
  </div>
</section>



@endsection

