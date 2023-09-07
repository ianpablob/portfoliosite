<x-app-layout>
<header>
  
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 50px; height: 50px;"></a>
    </div>
    @include("main.nav")
  </header>
  
<div class="Container">
    <div class="Title">
    <h1>Contact Page</h1> 
    </div>
    <div class="Contactcontent">
    <p>E-mail: ianpabloborges@gmail.com</p>
    <p>Social Media: </p>
    <p><a href="https://github.com/ianpablob"><img src="{{ url('/images/github.png')}}" alt="foto" style="width: 40px; height: 40px;"></a>
    <a href="https://www.linkedin.com/in/ianpbsilva/"><img src="{{ url('/images/linkedin.png')}}" alt="foto" style="width: 50px; height: 50px;"></a>

    </div>
<div class="Aboutpic">
<p>

</p>
</div>
</x-app-layout>
