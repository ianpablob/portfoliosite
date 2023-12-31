@import url('https://fonts.googleapis.com/css2?family=Belanosima&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: black;
}

/* Set text color to white */
body, h1, p {
  color: white;
}

:root {
  --color-white: #fff;
  --color-pink: #412331;
  --color-black: #000000;
}
  
.logo {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0;
  padding: 0;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0;
  padding: 10px;
}

.mypic {
  margin-left: auto; /* Align the .mypic div to the right */
  overflow: hidden; /* Hide any content that goes beyond the rounded corners */
  flex-shrink: 0; /* Prevent the image from shrinking */
  width: 300px; /* Set a fixed width for the .mypic div */
  height: 300px; /* Set a fixed height for the .mypic div */
  margin-right: 200px;
  margin-bottom: 200px;
  border-radius: 50%;
  opacity: 0.7;
}

.mypic img {
  width: 100%; /* Make the image fill the entire .mypic div */
  height: 100%; /* Make the image fill the entire .mypic div */
  filter: grayscale(100%); /* Apply black and white filter */
  object-fit: cover; 
}

html {
  scroll-behavior: smooth;
  font-size: 15px;
}

body {
  font-family: 'monospace', sans-serif;
}

header {
  display: flex;
  justify-content: space-between;
  margin: 0;
  padding: 10px;
}

nav {
  margin: 40px;
  padding: 0;
  align-items: right;
  
}

.nav-links {
  list-style: none;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin: 0;
  padding: 0;
}

.nav-links li {
  margin-left: 15px;
}

.nav-links li a {
  color: white;
  font-size: 20px; /* Increase the font size */
}

#Home {
  height: 100vh;
  background: black;
  width: 100%;
  display: flex;
  align-items: center;
  font-size: 10px;
}

.Presentation {
  height: 50%;
  width: 100%;
  background: var(--color-black);
  display: flex;
  justify-content: left;
  align-items: left;
  flex-direction: column;
  font-size: 40px;
  margin-left: 50px;
  flex: 1; /* Allow the text to occupy all available space */
  padding-left: 50px; /* Adjust the padding as needed */
  position: relative;
  margin-bottom: 200px;
}

.line {
    position: relative;
    top: 50%;
    width: 24em;
    margin: 0 auto;
    border-right: 2px solid rgba(255, 255, 255, 0.75);
    font-size: 100%;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;transform: translateY(-50%);
}

.anim-typewriter {
  animation: typewriter 4s steps(40) 1s 1 normal both,
  blinkTextCursor 500ms steps(40) infinite normal;
}

@keyframes typewriter {
  from{
    width: 0;
  }
  to{
    width: 15.5em;
  }
}

@keyframes blinkTextCursor {
  from {
    border-right-color: rgba(255, 255, 255, 0.75)
  }
  to {
    border-right-color: transparent;
  }
}


.Title {
  height: 18%;
  width: 50%;
  background: blue;
  display: flex;
  justify-content: left;
  align-items: left;
  flex-direction: column;
  font-size: 20px;
  color: white;
  padding: 20px 0; /* Add padding to the top and bottom */
  margin-bottom: 0; /* Remove the margin at the bottom */
}

.Abouttext {
  background: var(--color-black);
  color: white;
  padding: 90px;
  font-size: 18px;
  line-height: 1.6;
  margin-left: 80px;
  flex: 1;
  padding-right: 20px;
}
  
.Projectstext {
  background: var(--color-black);
  color: white;
  padding: 90px;
  font-size: 18px;
  line-height: 1.6;
  margin-left: 80px;
  flex: 1;
  padding-right: 20px;
}

.Aboutmessage {
  background: var(--color-pink);
  color: white;
  padding: 20px; /* Adjust padding to reduce the space around the message */
  font-size: 18px; /* Increase the font size */
  line-height: 1.6; /* Add some spacing between paragraphs */
  margin-bottom: 00px; /* Adjust margin to reduce the space below the message */
  margin-left: 80px; /* Keep the same margin as .Abouttext for consistency */
  margin-top: 0; /* Remove the margin at the top */
  margin-right: 600px;
  text-align: center;
  
}



.Abouttext p {
  margin-bottom: 20px; /* Add margin between paragraphs */
}

.Aboutpic {
  width: 350px;
  height: 400px;
  float: right;
  margin-right: 200px;
}

.AboutContainer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}


.ProjectsContainer {
  display: flex;
  grid-template-columns: 2fr 2fr; /* Divide the layout into two equal columns */
  gap: 20px; /* Add some spacing between the columns */
  padding: 90px;
  font-size: 18px;
  line-height: 1.6;
  margin-left: 80px;
}


.Aboutpic img {
  width: 100%; /* Make the image fill the entire .mypic div */
  height: 100%; /* Make the image fill the entire .mypic div */
  filter: grayscale(100%); /* Apply black and white filter */
  object-fit: cover; 
}
.Projects {
  background: var(--color-pink);
  color: white;
  padding: 20px;
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 0;
  margin-left: 80px;
  margin-top: 0;
  text-align: center;
}


.Contactcontent {
  background: var(--color-pink);
  color: white;
  padding: 20px; /* Adjust padding to reduce the space around the message */
  font-size: 18px; /* Increase the font size */
  line-height: 1.6; /* Add some spacing between paragraphs */
  margin-bottom: 00px; /* Adjust margin to reduce the space below the message */
  margin-left: 00px; /* Keep the same margin as .Abouttext for consistency */
  margin-top: 0; /* Remove the margin at the top */
  
}

@keyframes cursor {
  50% {
    border-color: transparent;
  }
}

@keyframes typing {
  from {
    width: 0;
  }
}

header {
  background-color: black;
  color: white;
  height: 70px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}

.logo {
  font-size: 2rem;
}

.navbar {
  background-color: #333;
}

.navbar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover,
.navbar a:focus {
  text-decoration: none;
}


.nav-links {
  list-style: none;
  margin: 0;
  padding: 0;
}
.nav-links li a {
  text-decoration: none; 
}
.nav-links li {
  text-align: center;
  margin: 20px 15px; /* Add horizontal spacing between options */
  padding-right: 15px; /* Add additional right padding */
  border-right: 1px solid white; /* Add a vertical line separator */
}

.nav-links li:last-child {
  margin-right: 0; /* Remove right margin from the last option */
  padding-right: 0; /* Remove padding from the last option */
  border-right: none; /* Remove vertical line separator from the last option */
}

/* Media query for responsive design */
@media screen and (max-width: 768px) {
  .nav-links {
    display: flex;
    justify-content: space-around;
    width: 50%;
  }

  .nav-links li {
    margin: 0;
  }
}