<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    


<?php require '../heade/header.php'; ?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="../footer/footer_style.css">
<link rel="stylesheet" href="contact.css"> 
<div style="border: none; box-shadow: 0 6px 3px rgba(0,0,0,.2); "class="inscrire">
    <div class="liste_user">
        <div class="user-details">
            <center>
                <h1 style="padding: 30px; color: #fff;">Nous Contacter</h1>
            </center>
            <form class="co" action="valide.php" method="POST">
                <div>
                    <br>
                    <label for="mail">Votre e-mail</label>
                    <input style="font-family : arial;" type="email" id="mail" name="mail" placeholder="Mail" required>
                </div>
                <div> <!-- Nouveau div pour la zone de texte -->
                    <label for="remarque">Votre remarque</label>
                    <textarea style="font-family : arial;" id="remarque" name="remarque" placeholder="Votre Message..." required></textarea>
                    <br>
                </div>
                <input type="submit" id='button' value="Envoyer" name="ok">
            </form>   
        </div>
        <div class="user-details" style="text-align: center;">  </div>
    </div>
</div>
<script src="../js/script.js"></script>

<?php require '../footer/footer.php'; ?>

</body>
</html>