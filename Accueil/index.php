<?php require 'header.php'; ?>
<div class="contenue">
  <!-- Slideshow container -->
  <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="image/img3.jpg" style="width:100%">
    </div>
        
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="image/img3.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="image/img3.jpg" style="width:100%">
    </div>
  </div>
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div><br>
  <div class="article">
    <table>
      <tr>
        <td><?php require 'catalogue.php'; ?></td>>
        <td><?php require 'catalogue.php'; ?></td>
        <td><?php require 'catalogue.php'; ?></td>
      </tr>
      <tr>
        <td><?php require 'catalogue.php'; ?></td>
        <td><?php require 'catalogue.php'; ?></td>
        <td><?php require 'catalogue.php'; ?></td>
      </tr>
      <tr>
        <td><?php require 'catalogue.php'; ?></td>
        <td><?php require 'catalogue.php'; ?></td>
        <td><?php require 'catalogue.php'; ?></td>
      </tr>
    </table>
  </div>
  
  <script>
  let slideIndex = 0;
  showSlides();
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
  }
  </script>
</div>
<?php require 'footer.php'; ?>