<!-- call topbit code -->
<?php include "topbitlegit.php"?>

<!-- begin main division -->
        <main class="box">
            <h3>The North Island</h3>
            <p>The North island is the more developed of the two, holding three quaters of the country's population as well as the capital of Wellington and largest city of Auckland, the North island is the classic city island escape.</p>
            <!--include slideshow -->
            <div class="slideshow-container">
                <!-- Code from w3schools -->
  
<!-- first image in slideshow(Hobbiton) -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/hobbiton_northisland.jpg" alt="Hobbiton" width=900 height=500>
    <div class="text">Hobbiton set - Hobbiton</div>
  </div>

<!-- second image in slideshow(Mount Maunganui) -->
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/mount-maunganui_northisland.jpg" width=900 alt="Mount Maunganui - Tauranga" height=500>
    <div class="text">Mount Maunganui - Tauranga</div>
  </div>

<!-- third image in slideshow(north island lighthouse) -->
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/lighthouse_northisland.jpg" width=900 alt="Light house" height=500>
    <div class="text">Light House - Castle point</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
      
            <!-- Javascript for slideshow -->
<script>
     var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}       
</script>
        </main>

<!-- begin aside class -->
        <aside class="box">
            <!-- popular attraction -->
             <h3>Top attractions:</h3>
          <ul>
                <li>Ski Mount Ruapehu</li>
                <li>Skytower</li>
                <li>Rotorua Adventure Land</li>
                <li>Waitomo Glow worms</li>
                <li>Te Papa Museum</li>
            </ul>  
            
            <!-- Link to wheel decide web application -->
            <p>Can't choose? Feel free to take this link and wheel decide for you.</p>
            <a href="https://wheeldecide.com/" target="_blank">Wheel decide</a>
        </aside>
        <footer class="box">
       <h2>&copy; ExploreNZ</h2>   
        </footer>

<!-- call the php code to add bottombitlegit.php -->
<? php include "bottombitlegit.php"?>