<x-app-layout>
  <header>
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ url('/images/logowhite.png')}}" alt="Logo" style="width: 50px; height: 50px;"></a>
    </div>
    @include("main.nav")
  </header>

  <div class="Container">
      <div class="Title">
        <h4>No Code Portfolio</h4>
      </div>
  </div>

  <div class="nocodetext">
  <br>
      <br>
      <br>
      
    <div class="content">
      <div class="text">
        <h1 class="nocodetitle">AI Custom Comments</h1>
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
        <img src="{{ url('/images/aicustom.png')}}" alt="foto" style="width: 500px; height: 300px;" class="zoomable-image" onclick="toggleZoom(this)">
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
    <br>
    <br>

    
    <div class="content">
      <div class="text">
        <h1 class="nocodetitle">Update Tracks</h1>
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
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

    <div class="content">
      <div class="text">
        <h1 class="nocodetitle">Update Podio by Google Forms</h1>
        <p>
          <b>Project Overview:</b>The automation was created with the aim of facilitating the change of information on the customer page on the podium quickly and practically by filling out a Google Form.
        </p>
        <br>
        <p>
          <b>Project Details:</b>It is an automation that can make changes to links present in the customer's profile and provide information about previous and new links.
        </p>
        <br>
        <p>
          <b>Impact:</b> This automation was able to facilitate the process of updating the pages of customers who request exchanges without requiring it to be done manually and searching for details about each one.

      </div>
        <div class="images">
        <img src="{{ url('/images/csform.png')}}" alt="foto" style="width: 500px; height: 400px;"  class="zoomable-image" onclick="toggleZoom(this)">
        <div class="toolsimgs">
          <img src="{{ url('/images/spotback.png')}}" alt="foto" style="width: 50px; height: 50px;border-radius: 10px;">
          <img src="{{ url('/images/formslogo.png')}}" alt="foto" style="width: 50px; height: 50px;border-radius: 10px;">
          <img src="{{ url('/images/podioback.png')}}" alt="foto" style="width: 50px; height: 50px; border-radius: 10px;" >
          <img src="{{ url('/images/makelogo.png')}}" alt="foto" style="width: 50px; height: 50px; border-radius: 10px;" >
        </div>
      </div>
    </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
  </div>
</x-app-layout>
