<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories - Collections of Stories</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="top-bar">
    <div class="container">
        <div class="nav-container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="Logo" style="height: 50px; vertical-align: middle;">
                    Collection of Stories
                </a>
            </div>
            
            <div class="nav-menu-right">
                <div class="nav-links">
                    <a href="index.php">Home</a>
                    <a href="Artist.php">Artist</a>
                    <a href="About.php">About</a>
                    <a href="Contact.php">Contact</a>
                </div>
                <form action="search.php" method="GET" class="search-bar">
                    <input type="text" name="artist_name" placeholder="Search...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
</header>

         <main class="gallery-page">
            <h1 class="gallery-title">Collection of Stories</h1>

  <div class="gallery-container">

    
    <button id="prev" class="arrow">&#10094;</button>

  
   <a class="frame" href="creator.php?creator=davinci" data-link="creator.php?creator=davinci">
      <img src="images/Da Vinci With Frame.png">
      <span class="frame-title">Leonardo Da Vinci</span>
    </a>

    
    <a class="frame" href="creator.php?creator=vangogh" data-link="creator.php?creator=vangogh">
      <img src="images/Van Gogh With Frame.png">
      <span class="frame-title">Vincent Van Gogh</span>
    </a>

   
    <a class="frame" href="creator.php?creator=monet" data-link="creator.php?creator=monet">
      <img src="images/Monet With Frame.png">
      <span class="frame-title">Claude Monet</span>
    </a>

    
    <a class="frame" href="creator.php?creator=dali" data-link="creator.php?creator=dali">
      <img src="images/Dali With Frame.png">
      <span class="frame-title">Salvador Dali</span>
    </a>

    
    <a class="frame" href="creator.php?creator=bacon" data-link="creator.php?creator=bacon">
      <img src="images/Bacon With Frame.png">
      <span class="frame-title">Francis Bacon</span>
    </a>

    
    <button id="next" class="arrow">&#10095;</button>

  </div>

</main>

<script>


var slideIndex = 1;


var frames = document.getElementsByClassName("frame");


showFrames(slideIndex);


document.getElementById("next").onclick = function () {

  slideIndex++;
  showFrames(slideIndex);

};


document.getElementById("prev").onclick = function () {

  slideIndex--;
  showFrames(slideIndex);

};


function showFrames(n) {

  var i;

 
  if (n > frames.length) {
    slideIndex = 1;
  }

  
  if (n < 1) {
    slideIndex = frames.length;
  }

  
  for (i = 0; i < frames.length; i++) {

    frames[i].classList.remove("active");
    frames[i].classList.remove("left");
    frames[i].classList.remove("right");
    frames[i].classList.remove("hidden");

    frames[i].classList.add("hidden");
  }


  var current = slideIndex - 1;

 
  var prev = current - 1;

  
  var next = current + 1;

 
  if (prev < 0) {
    prev = frames.length - 1;
  }


  if (next >= frames.length) {
    next = 0;
  }

 
  frames[current].classList.remove("hidden");
  frames[current].classList.add("active");

  
  frames[prev].classList.remove("hidden");
  frames[prev].classList.add("left");

  
  frames[next].classList.remove("hidden");
  frames[next].classList.add("right");
}


for (let i = 0; i < frames.length; i++) {

  frames[i].onclick = function (e) {

    e.preventDefault();

    
    if (i == slideIndex - 1) {

      window.location = frames[i].dataset.link;

    } 
    
   
    else {

      slideIndex = i + 1;
      showFrames(slideIndex);

    }

  };

}

</script>

    <main class="container">
        <div class="card-grid">
            <section class="card">
                </section>
            
            <section class="card">
                </section>
            
            <section class="card">
                </section>
        </div>
    </main>


    <footer class="main-footer">
    <p>&copy; 2026 Collection of Stories. All Rights Reserved.</p>
    <div class="footer-links">
        <a href="index.php">Home</a> | 
        <a href="about.php">About Us</a> | 
        <a href="contact.php">Contact</a>
    </div>
</footer>

</body>
</html>