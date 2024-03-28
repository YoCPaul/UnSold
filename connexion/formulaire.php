<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

<?php require '../heade/header.php'; ?>
<?php

if(isset($_GET['erreur'])){
    $erreur = $_GET['erreur'] ;
    if($erreur == 1){
        echo"<script>alert(\"l'email ou le mot de passe est incorecte\")</script>";
    }
    
}


?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="../footer/footer_style.css">
<link rel="stylesheet" href="cssformu.css">
    <div class="connexion" style="border: none; box-shadow: 0 6px 3px rgba(0,0,0,.2);">
        <center>
            <br><h1 style="color: #fff;">Connexion</h1>
        </center>
        <form class="co" action="co-reusie.php" method="POST">
            <div>
                <label for="email">Votre e-mail</label>
                <input style="font-family : arial;" type="email" id="email" name="email" placeholder="Mail" required>
            </div>
            <div>
                <label for="mdp">Votre Mot de Passe</label>
                <input style="font-family : arial;" type="password" id="mdp" name="mdp" placeholder="Mot de passe" required>
                <br>
                <br>
                
            </div>
            <input type="submit" id='button' value="Se Connecter" name='ok'>
        </form>
    </div>
<?php require '../footer/footer.php'; ?>

    
</body>
</html>