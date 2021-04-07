<!-- call topbit code -->
<?php include "topbitlegit.php"?>

<!-- begin main division -->
        <main class="box">
            <h3>The South Island</h3>
            <p>The South island is less populated than the North Island and is much less developed as result, perfect for skiing, tramping, camping, hiking, swimming, exploring, biking or any other outdoor activies.</p>
            <!--include slideshow -->
            <div class="slideshow-container">
                <!-- Code from w3schools -->
                
<!-- first image in slideshow(Arrow town) -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/arrowtown_southisland.jpg" width=900  alt="Arrowtown" height=500>
    <div class="text">Edges of Arrowtown</div>
  </div>
                
<!-- Second image in slideshow (South island glacier) -->
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/glacier_southisland.webp" width=900 alt="South island glacier" height=500>
    <div class="text">Franz Josef Glacier</div>
  </div>
                
<!-- third image in slideshow(south island mountain range) -->
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/mountain_southisland.jpg" width=900 alt="South island mountain" height=500>
    <div class="text">Aoraki/Mt Cook</div>
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
                <h3>Top attractions:</h3>
            <ul>
                <li>Mt Cook</li>
                <li>Pancake Rocks</li>
                <li>Fox Glacier</li>
                <li>Milford Sound</li>
                <li>Mirror Lake</li>
            </ul>  
            
            <p>Can't choose? Feel free to take this link and wheel decide for you.</p>
            <a href="https://wheeldecide.com/" target="_blank">Wheel decide</a><!-- free wheel app -->
        </aside>
        <footer class="box">
        <h2>&copy; ExploreNZ</h2>    
        </footer>

<!-- call bottombitlegit.php -->
<?php include "bottombitlegit.php"?> 