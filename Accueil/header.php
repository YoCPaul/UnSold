<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Acceuil</title>
    <link rel="stylesheet" href="index_style.css">
  </head>

  <body>

    <!--header-->
    <header>
      <!--Barre de menu-->
    <nav class="navbar">

      <a href="index.php">
        <img src="image/unsold_logo.png" id="logo">
      </a>

      <div class="nav-links">
        <ul>
          <li><a href="Page_homme/index_homme.php">Homme</a></li>
          <li><a href="Page_femme/index_femme.php">Femme</a></li>
          <li><a href="Page_unisex/index_unisex.php">Unisex</a></li>
          <li><a href="Page_enfant/index_enfant.php">Enfant</a></li>
        </ul>

      </div>
      <!-- Bar de recherche -->
      <div class="researchbar">
        <form onsubmit="event.preventDefault();" role="search">
          <label for="search">Search for stuff</label>
          <input id="search" type="search" placeholder="Search..." autofocus required />
          <button type="submit">Go</button>    
        </form>
      </div>
      <!-- Menu hamurger Icone -->
      <img src="image/HambMenu.png" alt="Menu" id="iconeMenuHamb">
      
      <div class="button">
        <li class="comptsurvol"><a href="#"><img src="image/Icone_compte.png" alt="Compte" id="compte"></a>
          <ul class="dropdown-menu">
              <li><a class="inscription" href="#">Inscription</a></li>
              <li><a href="#">Connexion</a></li>
              <li><a href="#">Commande</a></li>
              <li><a href="#">Historique d'achat</a></li>
          </ul>
        </li>
      </div>
      <img src="image/Icone_panier.png" alt="Panier" id="panier">
    </nav>
</header> 