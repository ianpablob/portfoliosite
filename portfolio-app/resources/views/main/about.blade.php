<x-app-layout>
<header>
  
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 50px; height: 50px;"></a>
    </div>
    @include("main.nav")
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

</x-app-layout>
