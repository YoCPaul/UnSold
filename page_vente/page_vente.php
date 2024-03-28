<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vente</title>
</head>
<body>

<?php require '../heade/header_co.php'; ?>
<link rel="stylesheet" href="../heade/navbar_style.css">
<link rel="stylesheet" href="style_pv.css">

<body> 
<form action="..\confrimer\confirmeachat.php">
    <div class="container-fluid px-1 px-md-2 px-lg-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
                <div class="card">
                    <div class="row justify-content-center">
                        <h3 class="mb-4">Payement par carte de credit :<br></h3>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-7 border-line pb-3">
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Titulaire de la carte :</p> 
                                <input type="text" id="namecard" name="name" placeholder="Nom Prénom" size="15" required="required" >
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Numero de carte :</p>
                                <div class="row px-3"> 
                                    <input type="text" name="card-num" placeholder="0000 0000 0000 0000" size="18" id="cr_no" minlength="19" maxlength="19" required="required" >
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Date d'expiration :</p> 
                                <select name="exp_month" id="exp_month" required="required" >
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <select name="exp_year" id="exp_year">
                                    <?php
                                    $currentYear = date("y");
                                    $maxYear = $currentYear + 16; // 16 ans plus tard
                                    for ($year = $currentYear; $year <= $maxYear; $year++) {
                                        echo "<option value='$year'>$year</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">CVV/CVC :</p> 
                                <input type="password" id="cvv" name="cvv" placeholder="000" size="4" minlength="3" maxlength="3"  >
                            </div>
                        </div>
                        <div class="col-sm-5 text-sm-center justify-content-center pt-4 pb-4"> 
                            <small class="text-sm text-muted">Numero de commande :</small>
                            <h5 class="mb-5" id="orderNumber">12345678</h5> 
                            <div class="espa">
                            </div>
                            <?php
                            include("../inc/connexion.php");
                            $prenom = $_SESSION['utilisateur'] ;
                            $reponse = $bdd->requete("SELECT * FROM utilisateur WHERE prenom ='$prenom'");
                            $donnees = $reponse->fetch();
                            ?>
                            <div>Adresse : <br><?=$donnees['adresse'];?> </div>
                <div></div>
                            
                            
                            <br><br>
                            <div class="row px-3 justify-content-sm-center">
                                <h2 class="">
                            <small class="text-sm text-muted">      </small>
                                    <span class="text-md font-weight-bold mr-2">Montant :&nbsp;<?=number_format($_SESSION['prixtotal'],2,',',' ');?>&nbsp;€</span>
                                    <span class="text-danger"></span>
                                </h2>
                            </div>  
                        </div>
                        <br>
                        <br>
                    </div>
                    <center>
                    <input id="payer"class="payer" type="submit" value="Payer" onclick="">
                </center>
                </div>
            </div>
        </div>
    </div>
                                </form>    
    <br><br><br><br><br><br> 
    <?php require '../footer/footer.php'; ?>
    <link rel="stylesheet" href="../footer/footer_style.css">
    <script>
    document.getElementById('cr_no').addEventListener('input', function(event) {
        // Récupérer la valeur saisie dans l'input
        let inputValue = event.target.value;

        // Filtrer uniquement les chiffres de 1 à 9
        let filteredValue = inputValue.replace(/[^1-9]/g, '');

        // Formater la valeur en groupes de quatre chiffres séparés par un espace
        let formattedValue = '';
        for (let i = 0; i < filteredValue.length; i++) {
            formattedValue += filteredValue[i];
            if ((i + 1) % 4 === 0 && (i + 1) !== filteredValue.length) {
                formattedValue += ' ';
            }
        }

        // Mettre à jour la valeur de l'input avec le filtre appliqué
        event.target.value = formattedValue;
    });

    document.getElementById('cvv').addEventListener('input', function(event) {
    // Récupérer la valeur saisie dans l'input
    let inputValue = event.target.value;

    // Filtrer uniquement les chiffres de 1 à 9
    let filteredValue = inputValue.replace(/\D/g, '');

    // Mettre à jour la valeur de l'input avec le filtre appliqué
    event.target.value = filteredValue;
});

// Fonction pour générer un code aléatoire de longueur donnée
function generateRandomCode(length) {
            let result = '';
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        // Générer un code à 8 caractères
        const generatedCode = generateRandomCode(8);

        // Insérer le code généré dans l'élément HTML correspondant
        document.getElementById('orderNumber').textContent = generatedCode;

        
        var btn = document.getElementById("payer");
        var ver1 = document.getElementById("cvv").value;
        var ver2 = document.getElementById("ocr_no").value;
        var ver3 = document.getElementById("namecard").value;
        btn.addEventListener("click", updateBtn);
        
        

    </script>

    
</body>
</html>

    