<!DOCTYPE html>
<html>

<head>
  <title>About Us</title>
  <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <link rel="stylesheet" type="text/css" href="./css/about_us.css" />
  <link rel="stylesheet" type="text/css" href="./css/slideshow.css" />
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="info-container">
    <h1 class="title-fonts">About Us</h1>
    <p>We serve all authentic Mexican food that you will find being sold on the streets of Mexico.
      Our quick-eat Mexican Taqueria (Restaurant) makes food fresh and from scratch daily.
      Our ingredients come straight from our <i>Mercado</i> (Market) right next door.
      You won't be disappointed with our tacos, burritos, tortas, Menudo, and Tamales.
      Order online or give us a call and we will have your food ready for pick up. </p>
  </div>

  <!-- HTML structure based off of https://www.w3schools.com/howto/howto_js_slideshow.asp-->
  <div class="slideshow-container">
    <div class="center-img">
      <div class="img-container fade-anim">
        <img src="./images/aboutus1.jpg">
      </div>

      <div class="img-container fade-anim">
        <img src="./images/aboutus2.jpg">
      </div>

      <div class="img-container fade-anim">
        <img src="./images/aboutus3.jpg">
      </div>

      <div class="img-container fade-anim">
        <img src="./images/aboutus4.png">
      </div>

      <div class="img-container fade-anim">
        <img src="./images/aboutus5.jpg">
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
  <?php include 'footer.php'; ?>
</body>

</html>