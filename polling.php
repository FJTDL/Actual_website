<!-- call topbit code -->
<?php include "topbitlegit.php"?>

<!-- begin main division -->
            <main class="box">
             <!-- include slideshow here -->
             <div class="slideshow-container">
                <!-- Code from w3schools -->

<!-- first image on slide show (white island) -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="images/whiteisland_pollingpage.webp" width=900 height=500 alt="White island">
    <div class="text">White Island</div>
  </div>

<!-- second image on slideshow (beach at sunset) -->             
  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="images/beachsunset_pollingpage.jpg" width=900 height=500 alt="Sunset Beach">
    <div class="text">Whatipu</div>
  </div>

<!-- third image on slideshow (mountain cliff) -->
  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="images/mountaincliff_pollingpage.jpg" width=900 height=500 alt="Cliff face">
    <div class="text">Milford Sound</div>
  </div>
                 
<!-- fourth image on slideshow (trail) -->
  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="images/trail_pollingpage.jpg" width=900 height=500  alt="Tongariro Trail">
    <div class="text">New Zealand Cliff face</div>
  </div>
    
<!-- fifth image on slideshow (haka) -->
  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="images/haka_pollingpage.jpg" width=900 height=500  alt="Haka">
    <div class="text">Haka at Waitangi Marae</div>
  </div>
         
<!-- sixth image on slideshow (Maori Mural) -->
  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="images/maorimural_polling%20page.jpg" width=900 height=500  alt="Mural">
    <div class="text">Lake Taupo Mural</div>
  </div>

  <!-- Next and previous buttons -->

</div>
<br>

<!-- The dots/circles -->
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

            <!-- script tags for XMl and PHP for poll-->
             <script>

                function getVote(int) {

                    var xmlhttp=new XMLHttpRequest();

                        xmlhttp.onreadystatechange=function() {

                    if (this.readyState==4 && this.status==200) {

                        document.getElementById("poll").innerHTML=this.responseText;

                        }

                    }

                xmlhttp.open("GET","poll.php?vote="+int,true);

                xmlhttp.send();

                }

            </script>
        <!-- begin poll section -->
            <div id="poll">

                <p>Was our site of any use for planning your next trip?</p>

                <form>

                    Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>

                    No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">

                </form>
            </div>
        <!-- logo links to home page -->
            <a href="webindex.php"><img src=images/ExploreNZlogo.png alt=logo height=240></a>
        </aside>

<!-- call bottombitlegit.php code -->
<?php include "bottombitlegit.php"?>