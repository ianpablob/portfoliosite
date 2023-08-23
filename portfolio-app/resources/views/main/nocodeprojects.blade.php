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

<div class="AboutContainer">
  <div class="Abouttext">
    <div class="Title">
      <h1>No Code Portfolio</h1> 
    </div>
  </div>
</div>


    <div class="Aboutmessage">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta scelerisque dui, a venenatis orci varius sed. Nullam ac justo nec lacus iaculis sollicitudin. Phasellus sed lorem quis tortor varius viverra. Maecenas scelerisque mauris sed diam feugiat, non blandit nibh euismod. Maecenas vitae lorem diam. Nunc finibus egestas mi, id ultrices mauris egestas ac</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta scelerisque dui, a venenatis orci varius sed. Nullam ac justo nec lacus iaculis sollicitudin. Phasellus sed lorem quis tortor varius viverra. Maecenas scelerisque mauris sed diam feugiat, non blandit nibh euismod. Maecenas vitae lorem diam. Nunc finibus egestas mi, id ultrices mauris egestas ac</p>
    
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta scelerisque dui, a venenatis orci varius sed. Nullam ac justo nec lacus iaculis sollicitudin. Phasellus sed lorem quis tortor varius viverra. Maecenas scelerisque mauris sed diam feugiat, non blandit nibh euismod. Maecenas vitae lorem diam. Nunc finibus egestas mi, id ultrices mauris egestas ac
       
      </p>
    </div>

    
  </div>





@endsection
