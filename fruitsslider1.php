<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
        <img src="images/fruitsslider1img1.jpg" class="sliderimg">
      </div>
      <div class="text slideupin">Egyptian Fruits</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <img src="images/fruitsslider1img2.jpg" class="sliderimg">
      <div class="text slideupin">Natural Antioxidant</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <img src="images/fruitsslider1img3.jpg" class="sliderimg">
      <div class="text slideupin">Vitamines Rich</div>
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

  <style>
/* Slideshow container */

  </style>

    <script>
    var slideIndex = 1;
    var slideIndexPrevious = 1;
    var slidepressed = false;
    showSlides(slideIndex);
    setTimeout(yourFunction, 4000);

    // Next/previous controls
    function plusSlides(n) {
      slidepressed = true;
      slideIndexPrevious = slideIndex;
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      slidepressed = true;
      showSlides(slideIndex = n);
    }

    function yourFunction(n) {
      // do whatever you like here
      if (!slidepressed) {
        plusSlides(1);

      } else {
        slidepressed = false;
      }
      setTimeout(yourFunction, 4000);
    }


    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var slidestext = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }

    window.addEventListener("scroll", function (event) {
      var scroll = this.scrollY;

    });

  </script>