<?php session_start();
$taille = isset($_SESSION['panier']) ? count($_SESSION['panier']) : 0;?>


<meta charset="utf-8">
<link rel="stylesheet" href="navbar_style.css">
  <body>
  
    <!--header-->
    <header>
      <!--Barre de menu-->
    <nav class="navbar">
      <a href="..\index\index_co.php">
        <img src="../image/unsold_logo.png" id="logo" href="../index/index.php">
      <div class="nav-links">
        <ul>
          <li><a href="..\page_type\page_catalogue_homme_co.php">Homme</a></li>
          <li><a href="..\page_type\page_catalogue_femme_co.php">Femme</a></li>
          <li><a href="..\page_type\page_catalogue_unisex_co.php">Unisex</a></li>
          <li><a href="..\page_type\page_catalogue_enfant_co.php">Enfant</a></li>
        </ul>
      </div>
      <!-- Menu hamurger Icone -->
      <img src="../image/HambMenu.png" alt="Menu" id="iconeMenuHamb">
      <div class="button">
        <li class="comptsurvol"><a href="#"><img src="../image/Icone_compte.png" alt="Compte" id="compte"></a>
        <a href="..\panier\panier_co.php">
          <img src="../image/Icone_panier.png" alt="Panier" id="panier">
        </a>
        <div class="nb_obj_panier">
          <a class="num"><?= $taille ?></a>
        </div>
          <ul class="dropdown-menu">
            <li><a href="#"><?php
        echo '<style>.nom-user  {
                margin bottom: 1000px; /* Ajoute une marge de 10px à tous les côtés du paragraphe */
                color: #fff;
                
            }
            .dropdown-menu{
              color: #000000;
            }
        </style>
            Bienvenue,<br>'. $_SESSION['utilisateur']. '!<br></li>';
        
        ?></a></li>
            <li><a href="../modifier/modifier.php">Modifier</a></li>
            <li><a href="../connexion/deco.php" >Déconnexion</a></li>
          </ul>
        </li>
      </div>
      
    </nav>
    </header> 
  </body>
</html>