<meta charset="utf-8">


<?php
  include("../inc/connexion.php");
  //$reponse = $bdd->requete('SELECT * FROM chaussure ORDER BY RAND() ');
  $reponse = $bdd->requete('SELECT * FROM chaussure WHERE taille = 40 AND genre = "femme" ');
  $donnees = $reponse->fetchALL(PDO::FETCH_ASSOC);
  /*print_r($donnees)*/
?>

<link rel="stylesheet" href="catalogue.css">

<div class="main">
  <div class="cards">
    <?php foreach($donnees as $c) :?>
      <div class="card">
        <a href="../page_produit/page_produit.php?id=<?= $c['id'] ?>">
          <img src= "<?= $c['imag1'] ?>">
          <div class="card-header">
            <h4 class="titre"><?= $c['nom']?></h4>
            <h4 class="prix"><?= $c['prix']?> €</h4>
          </div>
          <div class="card-body">
            <p class="genre"><?= $c['genre']?></p>
            <input type="button" class="achat" value="Voir">
          </div>
        </a>
      </div>
    <?php endforeach;?>
  </div>
</div>

