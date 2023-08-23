@extends('layouts.app')
@section('content')
<header>
  
    <div class="logo">
      <img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 50px; height: 50px;">
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </nav>
  </header>
  
  <div class="ProjectsContainer">
    <div class="Projectstext"> 
      <div class="Title">
      <h1>Projects Page</h1> 
      </div>

    <div class="Projects">
            <h3>SNAKE GAME in Python</h3>
            <p>Developed a version of the classic snake game from old cellphones!</p>
            <p><img src="{{ url('/images/snakepic.png')}}" alt="foto" style="width: 340px; height: 340px;"></p>
    </div>
    <div class="Projects">
            <h3>Project 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta scelerisque dui, a venenatis orci varius sed. Nullam ac justo nec lacus iaculis sollicitudin. Phasellus sed lorem quis tortor varius viverra. Maecenas scelerisque mauris sed diam feugiat, non blandit nibh euismod. Maecenas vitae lorem diam. Nunc finibus egestas mi, id ultrices mauris egestas ac. 
        Etiam elementum est vel sem consectetur, eget lobortis dolor suscipit. </p>
            <p><img src="{{ url('/images/snakepic.png')}}" alt="foto" style="width: 340px; height: 340px;"></p>
            
    </div>
    </div>
  </div>
@endsection
