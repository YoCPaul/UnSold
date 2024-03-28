<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogue-Unisex</title>
</head>
<body>
  

<?php 
/*if(isset($_GET['username'])){
  $username =$_GET['username'];
  require '../heade/header_co.php';
} */
require '../heade/header.php';
?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="carrousel_style.css">

<script src="../index/index.js"></script>
<div class="container">
<h1 style= "font-size: 100;"><center>Unisex</center></h1>
    <div class="catalogue">
        <?php require '..\page_type\catalogue_unisex.php'; ?>
        <link rel="stylesheet" href="../catalogue/catalogue.css">
    </div>
</div>
<?php require '../footer/footer.php'; ?>
<link rel="stylesheet" href="../footer/footer_style.css">
</body>
</html>