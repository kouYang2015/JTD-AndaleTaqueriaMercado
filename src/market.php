<!DOCTYPE html>
<html>

<head>
  <title>Market</title>
  <link rel="stylesheet" href="./css/theme.css" />
  <link rel="stylesheet" href="./css/market.css" />
  <link rel="stylesheet" type="text/css" href="./css/slideshow.css" />
</head>

<body>
  <?php include 'header.html'; ?>
  <div>
    <h1 style="text-align: center; padding: 30px">Market</h1>
    <div class="info-container">
      <p>
        Our Mercado (Market) has everything you need to prepare an authentic
        Mexican meal.
        We offer fresh vegetables and fruits in our produce section, specalty
        cut meats at our butcher counter, and a large selection of grocery
        items
        We have freshly baked Mexican breads, pastries, and desserts daily.
        Order your Tres Leches cakes custom made for that special occasion or
        prepare a quick meal from our hot and cold deli.
      </p>
    </div>
    <div class="slideshow-container" style="margin-top:50px;">
      <div class=" center-img">
        <div class="img-container fade-anim">
          <img src="./images/market1.jpg">
        </div>

        <div class="img-container fade-anim">
          <img src="./images/market2.jpg">
        </div>

        <div class="img-container fade-anim">
          <img src="./images/market3.jpg">
        </div>

        <div class="img-container fade-anim">
          <img src="./images/market4.jpg">
        </div>

        <div class="img-container fade-anim">
          <img src="./images/market5.jpg">
        </div>
      </div>
      <span class="prev-arrow" onclick="incrementSlide(-1)">&#10094;</span>
      <span class="next-arrow" onclick="incrementSlide(1)">&#10095;</span>
    </div>
    <br>

    <div class="dot-container">
      <span class="dot" onclick="jumpslide(1)"></span>
      <span class="dot" onclick="jumpslide(2)"></span>
      <span class="dot" onclick="jumpslide(3)"></span>
      <span class="dot" onclick="jumpslide(4)"></span>
      <span class="dot" onclick="jumpslide(5)"></span>
    </div>
    <script>
      //JS structure based off of https://www.w3schools.com/howto/howto_js_slideshow.asp
      let slideIndex = 1;
      showSlides(slideIndex);

      function showSlides(n) {
        let i = 0;
        let img_container = document.getElementsByClassName("img-container");
        let dots = document.getElementsByClassName("dot");
        if (n > img_container.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = img_container.length
        }
        for (i = 0; i < img_container.length; i++) {
          img_container[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        img_container[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }

      // Next/previous control
      function incrementSlide(n) {
        showSlides(slideIndex += n);
      }

      // Dot jump control
      function jumpslide(n) {
        showSlides(slideIndex = n);
      }
    </script>
  </div>
  <?php include 'footer.html'; ?>
</body>

</html>