<!-- call topbit code -->
<?php include "topbitlegit.php"?>

<!-- begin main division -->
        <main class="box">
            <p>ExploreNZ! The website to help you plan your next adventure around Aotearoa. Run by Kiwis all around the country all with their own opinion on what you have to do to say you have ever really visited the land of the long white cloud.</p>
            <!-- include slideshow here -->
             <div class="slideshow-container">
                <!-- Code from w3schools -->
                 
<!-- first image on show(rocks) -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="images/rocks_southisland.jpg" width=900 height=500 alt="Rocks">
    <div class="text">Stony shore NZ</div>
  </div>
                 
<!-- second image for slide show(south island beach) -->
  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="images/beach_southisland.webp" width=900 height=500 alt="Beach">
    <div class="text">Classic kiwi beach</div>
  </div>
                 
<!-- Third image in slide show(Bridal veil falls) -->
  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="images/bridal_veil_northisland.jpg" width=900 height=500 alt="Bridal veil falls">
    <div class="text">Bridal veil falls</div>
  </div>
                 
<!-- fourth image in slideshow(lake tekapo) -->         
  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="images/laketekapo_southisland.jpg" width=900 height=500 alt="Lake Tekapo">
    <div class="text">Lake Tekapo</div>
  </div>
                 
<!-- fifth image in slideshow(queenstown) -->
  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="images/queenstown_southisland.jpg" width=900 height=500 alt="Queenstown">
    <div class="text">Queenstown views</div>
  </div>
                 
<!-- sixth and final image in this slideshow(south island lake) -->   <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="images/lake_southisland.webp" width=900 height=500 alt="South island lake">
    <div class="text">South island lake</div>
  </div>
</div><!-- Closes the slideshow container div -->
            
<!-- The dots/circles to look nice -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div>
      
            <!-- Javascript for slideshow -->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}     
</script>
        </main>

<!-- begin aside class -->
        <aside class="box">
              <a href="webindex.php"><img src=images/ExploreNZlogo.png alt=logo height=240></a>
<!-- all times the logo appears it hyper links to home page -->
        </aside>

<!-- include bottom section of code-->
<?php include "bottombitlegit.php"?>