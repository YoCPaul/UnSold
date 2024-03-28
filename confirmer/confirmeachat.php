<?php require '../heade/header.php'; ?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="style_pp.css">
<link rel="stylesheet" href="confirmeachat.css">
<link rel="stylesheet" href="../footer/footer_style.css">


<?php
include("../inc/connexion.php");

if (!class_exists('Panier')) {
    include '../classes/Panier.php';
}

//var_dump($_SESSION['panier']);
$_SESSION['panier'] =array();
//var_dump($_SESSION['panier']);
    echo'<div style="background-color: white; padding: 15px;margin-left:500px;margin-right:500px; border: 1px solid gray; border-radius: 5px; text-align: center;">
    <br><br><h1>Paiement effectué avec succès ✅</h1><br><br><center>
    </div><br><br><br><center><a href="../index/index_co.php" id="acc">Accueil</a></center>';
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php require '../footer/footer.php';?>