<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

<?php require '../heade/header.php'; ?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="../footer/footer_style.css">
<link rel="stylesheet" href="inscription.css"> 
<div class="inscrire" style="border: none; box-shadow: 0 6px 3px rgba(0,0,0,.2);">
<div class="liste_user">
    <div class="user-details">
        <center>
            <br>
            <h1 style="color: #fff;">Inscription</h1>
        </center>
        <form class="co" action="valide.php" method="POST"  onSubmit="return checkValues();">
            <div>
                <label for='nom'>Votre nom</label>
                <input style="font-family : arial;" type="text" id="nom" name="nom" placeholder="Nom" required>
            </div>
            <div>
                <label for="prenom">Votre Prénom</label>
                <input style="font-family : arial;"type="text" id="prenom" name="prenom" placeholder="Prénom" required>
            </div>
            <div>
                <label for="mail">Votre e-mail</label>
                <input style="font-family : arial;" type="email" id="mail" name="mail" placeholder="Mail" required>
            </div>
            
            <div>
                <label for="adresse">Votre Adresse</label>
                <input style="font-family : arial;" type="text" id="adresse" name="adresse" placeholder="Adresse" required>
            </div>
            
            <div>
                <label for="d_naissance">Votre Date de Naissance</label>
                <input style="font-family : arial;" type="date" id="d_naissance" name="d_naissance" placeholder="Date" required>
            </div>
            <div>
                <label for="mdp">Votre Mot de Passe</label>
                <input style="font-family : arial;" type="password" id="mdp" name="mdp" placeholder="Mot de passe" required>
            </div>
            <div>
                <label for="mdp">Confrimer Votre Mot de Passe</label>
                <input style="font-family : arial;" type="password" id="cmdp" name="cmdp" placeholder="Confrimer votre Mot de passe" required>
            </div>
            <input type="submit" id='button' value="Inscription" name="ok">
        </form>   
    </div>
    <div class="user-details" style="text-align: center;">  </div>
</div>
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

<?php require '../footer/footer.php'; ?>
    
</body>
</html>