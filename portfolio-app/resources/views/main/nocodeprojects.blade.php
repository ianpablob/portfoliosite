<x-app-layout>
  <header>
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 50px; height: 50px;"></a>
    </div>
    @include("main.nav")
  </header>

  <div class="Container">
      <div class="Title">
        <h1>No Code Portfolio</h1>
      </div>
  </div>

  <div class="nocodetext">
    <h2 class="nocodetitle">AI Custom Comments</h2>
    <div class="content">
      <div class="text">
        <p>
        <b>Project Overview: </b> In the world of social media, engagement is key to building a strong online presence. The "AI Custom Comments" project is a testament to the power of automation and artificial intelligence in enhancing user interactions on social platforms.
        </p>
        <br>
        <p>
        <b>Project Details: </b> This project involved the creation of an intelligent automation system that generates customized comments for social media posts. Leveraging advanced AI algorithms, it analyzes post descriptions, quotes, or other information and crafts personalized comments that are not only relevant but also engaging.
        </p>
        <br>
        <p>
        <b>Impact: </b> With this automation, users can effortlessly boost their social media engagement by consistently providing meaningful and contextually appropriate comments on their posts. It saves time, increases user interaction, and contributes to a more vibrant online community.
        </p>
        <br>
      </div>
      <div class="images">
        <img src="{{ url('/images/aicustom.png')}}" alt="foto" style="width: 500px; height: 250px;" class="zoomable-image" onclick="toggleZoom(this)">
        <div class="toolsimgs">
          <img src="{{ url('/images/chatgpt.png')}}" alt="foto" style="width: 50px; height: 50px;">
          <img src="{{ url('/images/podioback.png')}}" alt="foto" style="width: 50px; height: 50px; border-radius: 10px;" >
          <img src="{{ url('/images/makelogo.png')}}" alt="foto" style="width: 50px; height: 50px; border-radius: 10px;" >
          <img src="{{ url('/images/woologo.png')}}" alt="foto" style="width: 50px; height: 50px; border-radius: 10px;" >
        </div>
      </div>
    </div>

    <br>
    <br>

    <h2 class="nocodetitle">Update Tracks</h2>
    <div class="content">
      <div class="text">
        <p>
          <b>Project Overview:</b> Music is a universal language, and staying connected with your favorite tunes on Spotify is made even more enjoyable through the "Update Tracks" automation project. This project showcases the capability of automation to enhance the music listening experience.
        </p>
        <br>
        <p>
          <b>Project Details:</b> "Update Tracks" is an innovative automation system designed to periodically and randomly select four songs from a Spotify user's profile. By regularly refreshing your playlist with new and exciting tracks, it ensures that all songs in your library receive a fair share of engagement, increasing plays, likes, and shares.
        </p>
        <br>
        <p>
          <b>Impact:</b> With "Update Tracks," music enthusiasts can actively engage with their entire music collection, giving each song the opportunity to shine. This automation not only enhances the overall listening experience but also boosts engagement for all songs in the user's library, making every song feel appreciated and valued in the digital music world.
        </p>
        <br>
      </div>
      <div class="images">
        <img src="{{ url('/images/updatetracks.png')}}" alt="foto" style="width: 500px; height: 250px;"  class="zoomable-image" onclick="toggleZoom(this)">
        <div class="toolsimgs">
          <img src="{{ url('/images/spotback.png')}}" alt="foto" style="width: 50px; height: 50px;border-radius: 10px;">
          <img src="{{ url('/images/podioback.png')}}" alt="foto" style="width: 50px; height: 50px; border-radius: 10px;" >
          <img src="{{ url('/images/makelogo.png')}}" alt="foto" style="width: 50px; height: 50px; border-radius: 10px;" >
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
