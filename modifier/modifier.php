<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
<?php require '../heade/header_co.php'; ?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="style_ppanier.css"> 
<link rel="stylesheet" href="modifier.css"> 

<?php
include("../inc/connexion.php");

if (!class_exists('Utilisateur')) {
    include '../classes/Utilisateur.php';
}
//var_dump($_SESSION['utilisateur']);
$prenom = $_SESSION['utilisateur'] ;
//var_dump($prenom);
$sql = $bdd->prepare( "SELECT * FROM utilisateur WHERE prenom = '$prenom' ");
$sql->execute();
$donne = $sql->fetch();
//var_dump($donne);
//var_dump($donne['nom']);
//var_dump($_POST['nom']);

// Vérifiez si le formulaire est soumis
if (isset($_POST['ok'])) {
    
    if($_POST['nom'] != null){
        $id = $donne['id']; 
        $nouveau_nom = $_POST['nom'];
        $reponse = $bdd->requete("UPDATE utilisateur SET nom = '$nouveau_nom' WHERE id=".$id."");
        $reponse->execute();
        echo "<script>alert(\"Informations de l'utilisateur ont été mises à jour\")</script>";
        echo"fait";
    }
    if($_POST['prenom'] != null){
        $id = $donne['id']; 
        $nouveau_nom = $_POST['prenom'];
        $reponse = $bdd->requete("UPDATE utilisateur SET prenom = '$nouveau_nom' WHERE id=".$id."");
        $reponse->execute();
        $_SESSION['utilisateur'] = $nouveau_nom;
        echo "<script>alert(\"Informations de l'utilisateur ont été mises à jour\")</script>";

    }
    if($_POST['mail'] != null){
        $id = $donne['id']; 
        $nouveau_nom = $_POST['mail'];
        $reponse = $bdd->requete("UPDATE utilisateur SET mail = '$nouveau_nom' WHERE id=".$id."");
        $reponse->execute();
        echo "<script>alert(\"Informations de l'utilisateur ont été mises à jour\")</script>";

    }

    if($_POST['adresse'] != null){
        $id = $donne['id']; 
        $nouveau_nom = $_POST['adresse'];
        $reponse = $bdd->requete("UPDATE utilisateur SET adresse = '$nouveau_nom' WHERE id=".$id."");
        $reponse->execute();
        echo "<script>alert(\"Informations de l'utilisateur ont été mises à jour\")</script>";

    }

    if($_POST['d_naissance'] != null){
        $id = $donne['id']; 
        $nouveau_nom = $_POST['d_naissance'];
        $reponse = $bdd->requete("UPDATE utilisateur SET d_naissance = '$nouveau_nom' WHERE id=".$id."");
        $reponse->execute();
        echo "<script>alert(\"Informations de l'utilisateur ont été mises à jour\")</script>";

    }

    if($_POST['mdp'] != null){
        $id = $donne['id']; 
        $nouveau_nom = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
        $reponse = $bdd->requete("UPDATE utilisateur SET mdp = '$nouveau_nom' WHERE id=".$id."");
        $reponse->execute();
        echo "<script>alert(\"Informations de l'utilisateur ont été mises à jour\")</script>";

    }

}
?>

<div class="inscrire">
<div class="liste_user">
    <div class="user-details">
        <center>
            <br>
            <h1 style="color: #fff;">Modifier</h1>
        </center>
        <form class="co" action="modifier.php" method="POST" onSubmit="return checkValues();">
            <div>
                <label for='nom'>Votre nom</label>
                <input style="font-family: arial;"type="text" id="nom" name="nom" placeholder="Nom">
            </div>
            <div>
                <label for="prenom">Votre Prénom</label>
                <input style="font-family: arial;"type="text" id="prenom" name="prenom" placeholder="Prénom" >
            </div>
            <div>
                <label for="mail">Votre e-mail</label>
                <input style="font-family: arial;"type="email" id="mail" name="mail" placeholder="Mail" >
            </div>
            
            <div>
                <label for="adresse">Votre Adresse</label>
                <input style="font-family: arial;"type="text" id="adresse" name="adresse" placeholder="Adresse" >
            </div>
            
            <div>
                <label for="d_naissance">Votre Date de Naissance</label>
                <input style="font-family: arial;"type="date" id="d_naissance" name="d_naissance" placeholder="Date" >
            </div>
            <div>
                <label for="mdp">Votre Mot de Passe</label>
                <input style="font-family: arial;"type="password" id="mdp" name="mdp" placeholder="Mot de passe" >
            </div>
            <div>
                <label for="mdp">Confrimer Votre Mot de Passe</label>
                <input style="font-family: arial;"type="password" id="cmdp" name="cmdp" placeholder="Confrimer votre Mot de passe" >
            </div>
            <input style="font-family: arial;"type="submit" id='button' value="Modifier" name="ok">
        </form>   
    </div>
    <div class="user-details" style="text-align: center;">  </div>
</div>
</div>
<?php require '../footer/footer.php'; ?>
<link rel="stylesheet" href="../footer/footer_style.css">
<script>
    function checkValues() {
    var value1 = document.getElementById('mdp').value;
    var value2 = document.getElementById('cmdp').value;
    if (value1 == value2) {
        return true;
    } else {
        alert("Les MDP ne sont pas paraille !");
        return false;
    }
    }
</script>
</body>
</html>


