<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
      <img src="images/sliderimg1.jpg" class="sliderimg">
      </div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
      <img src="images/sliderimg2.jpg" class="sliderimg">
      </div>
      <div class="text slideupin">Healthy Food</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
      <img src="images/sliderimg3.jpg" class="sliderimg">
      </div>
      <div class="text slideupin">For a longer life</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
      <img src="images/sliderimg4.jpg" class="sliderimg">
      </div>
      <div class="text slideupin">An Apple per Day</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
      <img src="images/sliderimg5.jpg" class="sliderimg">
      </div>
      <div class="text slideupin">Keeps the Doctor Away</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
      <img src="images/sliderimg6.jpg" class="sliderimg">
      </div>
      <div class="text slideupin">Healthy Food and Exercises</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
        <img src="images/sliderimg7.jpg" class="sliderimg">
        </div>
      <div class="text slideupin">Fruits are Antioxidants</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
        <img src="images/sliderimg8.jpg" class="sliderimg">
        </div>
      <div class="text slideupin">Vegetables are Antioxidants</div>
    </div>

    <div class="mySlides fadein">
      <div class="numbertext"></div>
      <div class="grower zomein">
        <img src="images/sliderimg9.jpg" class="sliderimg">
        </div>
      <div class="text slideupin">Vegetables after Meals</div>
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
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>
    <span class="dot" onclick="currentSlide(9)"></span>
  </div>

  <style>

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