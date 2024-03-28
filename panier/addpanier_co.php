<?php require '../heade/header_co.php'; ?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="style_pp.css">
<link rel="stylesheet" href="addpanier.css">
<link rel="stylesheet" href="../footer/footer_style.css">


<?php
include("../inc/connexion.php");

if (!class_exists('Panier')) {
    include '../classes/Panier.php';
}

$p = new Panier(); 

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT id FROM chaussure WHERE id = $id"; 
    $chaussure = $bdd->requete($sql);
    $chaussure->execute();
    if(empty($chaussure)){
        die("Le produit n'existe pas");
    }
    $p->add($id);
        echo'<div style="background-color: white; padding: 15px;margin-left:500px;margin-right:500px; border: 1px solid gray; border-radius: 5px; text-align: center;">
    <br><br><h1>Produit ajouté avec succès ✅</h1><br><br>
    </div><br><br><br><center><a href="../index/index_co.php" id="acc">Accueil</a>
    <a href="../panier/panier_co.php" id="pan">Panier</a></center>';
    
    
    //var_dump($chaussure->fetchAll());
}else{
    die("Pas de produit selectioner");
}

 
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php require '../footer/footer.php';?>