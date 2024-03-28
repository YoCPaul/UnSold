<?php 
session_start();  
 $taille = isset($_SESSION['panier']) ? count($_SESSION['panier']) : 0;
 //ternaire
?>

<meta charset="utf-8">
<link rel="stylesheet" href="navbar_style.css">
  <body>
  
    <!--header-->
    <header>
      <!--Barre de menu-->
    <nav class="navbar">
      <a href="..\index\index.php">
        <img src="../image/unsold_logo.png" id="logo" href="../index/index.php">
      <div class="nav-links">
        <ul>
          <li><a href="..\page_type\page_catalogue_homme_nonco.php">Homme</a></li>
          <li><a href="..\page_type\page_catalogue_femme_nonco.php">Femme</a></li>
          <li><a href="..\page_type\page_catalogue_unisex_nonco.php">Unisex</a></li>
          <li><a href="..\page_type\page_catalogue_enfant_nonco.php">Enfant</a></li>
        </ul>
      </div>
      <!-- Menu hamurger Icone -->
      <img src="../image/HambMenu.png" alt="Menu" id="iconeMenuHamb">
      <div class="button">
        <li class="comptsurvol"><a href="#"><img src="../image/log-in.png" alt="Compte" id="compte"></a>
          <ul class="dropdown-menu">
              <li><a href="../inscription/inscription.php">Inscription</a></li>
              <li><a href="../connexion/formulaire.php">Connexion</a></li>
          </ul>
        </li>
      </div>
      <a href="..\panier\panier.php">
      <img src="../image/Icone_panier.png" alt="Panier" id="panier">
      </a>
      <div class="nb_obj_panier">
        <a class="num"><?php
        echo $taille;
        ?></a>
      </div>
    </nav>
    </header> 
  </body>
</html>