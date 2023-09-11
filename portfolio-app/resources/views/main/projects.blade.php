<x-app-layout>
  <header>
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 45px; height: 45px;"></a>
    </div>
    @include("main.nav")
  </header>

  <div class="Container">
    <div class="TitleMain">
      <h1>Projects.</h1> 
    </div>
  </div>
</div>

<div class="ProjectsGrid">
  <div class="Project">
    <h2>Snake Game</h2>
    <p><img src="{{ url('/images/snakepic.png')}}" alt="foto" style="width: 250px; height: 250px;  margin-top:10px"></p>
    <p>Developed a version of the classic snake game from old cellphones with Python.</p>
  </div>

  <div class="Project">
    <h2>NoCode Projects</h2>
    <p><a href="{{ route('projects.nocode') }}"><img src="{{ url('/images/makelogo.png')}}" alt="foto" style="width: 250px; height: 250px; margin-top:10px"></a></p>
    <p>Automation that was developed with the nocode platform Make and lowcode .</p>
  </div>

  <div class="Project">
    <h2>Third Project</h2>
    <p><img src="{{ url('/images/pythonmainlogo.png')}}" alt="foto" style="width: 250px; height: 250px; margin-top:10px"></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
  </div>
</div>
</x-app-layout>
