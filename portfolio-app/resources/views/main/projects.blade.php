<x-app-layout>
  <header>
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 45px; height: 45px;"></a>
    </div>
    @include("main.nav")
  </header>

  <div class="Container">
    <div class="Title">
      <h1>Projects Page</h1> 
    </div>
  </div>
</div>

<div class="ProjectsGrid">
  <div class="Project">
    <h3>Snake Game</h3>
    <p>Developed a version of the classic snake game from old cellphones with Python.</p>
    <p><img src="{{ url('/images/snakepic.png')}}" alt="foto" style="width: 250px; height: 250px;  margin-top:10px"></p>
  </div>

  <div class="Project">
    <h3>NoCode Projects</h3>
    <p>Automation that was developed with the nocode platform Make and lowcode .</p>
    <p><a href="{{ route('projects.nocode') }}"><img src="{{ url('/images/makelogo.png')}}" alt="foto" style="width: 250px; height: 250px; margin-top:10px"></a></p>
  </div>

  <div class="Project">
    <h3>Third Project</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    <p><img src="{{ url('/images/pythonmainlogo.png')}}" alt="foto" style="width: 250px; height: 250px; margin-top:10px"></p>
  </div>
</div>
</x-app-layout>
