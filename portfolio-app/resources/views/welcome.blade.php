<x-app-layout>
<div class="header-container">
  <header>

    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 45px; height: 45px;"></a>
    </div>
    @include("main.nav")
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
</x-app-layout>
