@extends('layouts.app')

@section('content')
<header>
  
    <div class="logo">
      <img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 50px; height: 50px;">
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </nav>
  </header>

<div class="AboutContainer">
  <div class="Abouttext">
  <div class="Title">
      <h1>About Page</h1> 
  </div>
   
    <div class="Aboutmessage">
      <p>Hey, I'm Ian! Currently, I'm diving headlong into the world of Information Technology at UNIVESP. My journey started with curiosity and now I have experience with NoCode, Python and JavaScript, turning ideas into digital reality...</p>

      <p>Outside of the tech universe, I'm a Krav Maga enthusiast and I love wasting hours watching movies that inspire me. This is my portfolio, where I share my learning and projects that illustrate my passion for creating amazing things.</p>
    
      <p>Feel free to explore and get in touch. Hugs!
      </p>
      <p>
        <img src="{{ url('/images/pythonlogo.png')}}" alt="foto" style="width: 70px; height: 70px;">
        <img src="{{ url('/images/jslogo.png')}}" alt="foto" style="width: 70px; height: 70px;">
      </p>
      <p>
       
      </p>
    </div>
  </div>

  <div class="Aboutpic">
    <p>
      <img src="{{ url('/images/aboutpic.png')}}" alt="foto" style="width: 200px; height: 300px;">
    </p>
  </div>
</div>

@endsection
