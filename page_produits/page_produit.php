
<?php
    include("../inc/connexion.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    
    $sql = "SELECT * FROM chaussure WHERE id = $id"; 
    $chaussure = $bdd->requete($sql);
    $chaussure->execute();
    $data = $chaussure->fetchAll(PDO::FETCH_ASSOC);

   
    foreach ($data as $row) {
        $nom_chaussure = $row['nom'];
        $genre = $row['genre'];
        $des = $row['prix'];
    }

    $sql2 = "SELECT DISTINCT taille FROM chaussure WHERE nom = '$nom_chaussure' ORDER BY taille ASC"; 
    $tailles = $bdd->requete($sql2);
    $tailles->execute();
    $tailles_disponibles = $tailles->fetchAll(PDO::FETCH_ASSOC);
    
    // Troisième requête pour sélectionner cinq produits du même genre mais différents
    $sql3 = "SELECT * FROM chaussure WHERE genre = '$genre' AND id != $id AND prix != $des AND taille = 37 or taille = 40 ORDER BY RAND() LIMIT 5";
    $autres_chaussures = $bdd->requete($sql3);
    $autres_chaussures->execute();
    $autres_data = $autres_chaussures->fetchAll(PDO::FETCH_ASSOC);
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page <?= $row['nom']?></title>
</head>
<body>
<?php require '../heade/header.php'; ?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="style_pp.css">
<?php foreach($data as $row) :?>   
    <input type="button" value="Retour"  id="retour" onclick="history.go(-1)">
<main>
    
            <div class="main-left">
            
                <div class="image_prod_header">
                    <img src="<?=$row['imag1']?>" id="Product_img">
                </div>
                <div class="image_prod_footer">
                    <div class="autre_img">
                        <img src="<?=$row['imag1']?>" class="small_img">
                    </div>
                    <div class="autre_img">
                        <img src="<?=$row['imag2']?>" class="small_img">
                    </div>
                    <div class="autre_img">
                        <img src="<?=$row['imag3']?>" class="small_img">
                    </div>
                    <div class="autre_img">
                        <img src="<?=$row['imag4']?>" class="small_img">
                    </div>
                    <div class="autre_img">
                        <img src="<?=$row['imag5']?>" class="small_img">
                    </div>
                </div>
            </div>

            <div class="main-right">
                <div class="nom_prod">
                        <!-- nom du produit-->
                        <h1><?=$row['nom']?></h1>
                    </div>

                    <div class="prix">
                        <!-- prix produit-->
                        <h3><?=$row['prix']?>.00 €</h4>
                    </div>

                    <div class="select">
                        <!-- choix taille chaussure-->
                        <select name="Choisir une taille" id="Choix_taille">
                            <option value="1">Choisir une taille</option>
                            <?php 
                            foreach ($tailles_disponibles as $taille) {
                                echo "<option value='1'>" . $taille['taille'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class ="nb_ar_add_panier">
                        <div class="nb_article">
                        <!-- nb article selectionné -->
                            <input type="number" value="1" min="1" max="<?=$row['quantiter']?>"> 
                        </div>

                        <div class="ajout_panier">
                            <!-- Lien vers page panier-->
                            <a  href="../panier/addpanier.php?id=<?=$id ?>" class="button_add">Acheter</a>
                        </div>

                    </div>

                    <div class="detail_prod">

                        <h3>Détails du produit :</h3>

                        <div class="description_prod">
                            <center><?php
                            echo"<br>";
                            echo "<p><strong>Nom :</strong> " . $row['nom'] . "</p>","<br>";
                            echo "<p><strong>Marque :</strong> " . $row['marque'] . "</p>","<br>";
                            echo "<p><strong>Genre :</strong> " . $row['genre'] . "</p>","<br>";
                            $sql_tailles = "SELECT GROUP_CONCAT(DISTINCT taille ORDER BY taille ASC SEPARATOR ', ') AS tailles FROM chaussure WHERE nom = '$row[nom]'"; 
                            $tailles = $bdd->requete($sql_tailles);
                            $tailles->execute();
                            $tailles_disponibles = $tailles->fetch(PDO::FETCH_ASSOC);
                            // Afficher les tailles disponibles
                            echo "<p><strong>Tailles disponibles :</strong> " . $tailles_disponibles['tailles'] . "</p>";
                            ?>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <?php endforeach;?>
        <h2>Nous vous recommandons :</h2>
        <div class="under_prod">
            <div class="other_prod">
                <?php foreach ($autres_data as $row){
                    echo '
                    <a class="a" href="../page_produit/page_produit.php?id='.$row['id'].'">
                    <div class="prod">
                        <div class="background">
                        <img src="'.$row['imag1'].'">
                        <h3>'.$row['nom'].'</h3>
                        <h4>'.$row['prix'].'.00 €</h4>
                        </div>
                    </div>
                    </a>
                    ';
                }?>        
            </div> 
        </div>

        <script>
            var Product_img = document.getElementById("Product_img");
            var Small_img = document.getElementsByClassName("small_img");

            Small_img[0].onclick = function(){
                Product_img.src = Small_img[0].src;
            }

            Small_img[1].onclick = function(){
                Product_img.src = Small_img[1].src;
            }

            Small_img[2].onclick = function(){
                Product_img.src = Small_img[2].src;
            }

            Small_img[3].onclick = function(){
                Product_img.src = Small_img[3].src;
            }

            Small_img[4].onclick = function(){
                Product_img.src = Small_img[4].src;
            }
            
        </script>
    </body>

    <?php require '../footer/footer.php'; ?>
    <link rel="stylesheet" href="../footer/footer_style.css">

    
    </body>
</html>