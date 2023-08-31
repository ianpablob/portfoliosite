<x-app-layout>
<div class="header-container">
  <header>

    <div class="logo">
      <img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 50px; height: 50px;">
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
