<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unslod</title>
</head>
<body>



<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="carrousel_style.css">
<?php 
/*if(isset($_GET['username'])){
  $username =$_GET['username'];
  require '../heade/header_co.php';
} */
require '../heade/header_co.php';
?>

<script src="../index/index.js"></script>
<div class="container">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../image/1.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="../image/2.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="../image/3.png" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094; </a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="catalogue">
        <?php require '../catalogue/catalogue_co.php'; ?>
        <link rel="stylesheet" href="../catalogue/catalogue.css">
    </div>
</div>

<script>
    let slideIndex = 1;
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
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
<?php require '../footer/footer.php'; ?>
<link rel="stylesheet" href="../footer/footer_style.css">
  
</body>
</html>