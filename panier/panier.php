<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>
<body>
    <?php require '../heade/header.php'; ?>
    <link rel="stylesheet" href="../heade/navbar_style.css">
    <link rel="stylesheet" href="style_ppanier.css">
    <?php
    include("../inc/connexion.php");

    if (!class_exists('Panier')) {
        include '../classes/Panier.php';
    }

    $panier = new Panier ;
    if(isset($_GET['del'])){
        $panier->del($_GET['del']);
    }
    $tabid = array_keys($_SESSION['panier']);
    
    $tabtaille = count($tabid);
    //var_dump($tabid);
    
    //var_dump($chaussurep->fetchAll());
    ?>
    <form>
        <div class="panier">
            <div class="tableaux">
                <table>
                    <tr class="title">
                        <th class="produit">Produit</th>
                        <th class="qt">Quantité</th>
                        <th>Prix</th>
                    </tr>
                    <?php if($tabtaille == 0){
                        echo "<tr><center><h1 style='color: gray;'>Pas de produit</h1></center></tr>";
                        die;
                    }?>
                    <?php
                    $sql = ('SELECT * FROM CHAUSSURE WHERE id IN ('.implode(',',$tabid).')');
                    $chaussurep = $bdd->requete($sql);
                    foreach($chaussurep as $p):?>
                    <tr>
                        <!-- ... Contenu de la première ligne ... -->
                        <td>
                            <div class="info_panier">
                                <img src="<?= $p['imag1']?>">
                                <div class="info_descr">
                                    <p><?= $p['nom']?></p>
                                    <small><?=$p['taille']?></small>
                                    <br>
                                    <a href="panier.php?del=<?=$p['id'] ?>">Supprimer</a>
                                </div>
                            </div>
                        </td>
                        <td><?=$_SESSION['panier'][$p['id']]?></td>
                        <td><?=number_format($p['prix'],2,',',' ');?>€</td>
                    </tr>
                <?php endforeach; ?>
                </table>
                <div class="total">
                <table>
                    <tr>
                        <td>Total des chaussures</td>
                        <td id="tot_chauss"><?=number_format($panier->total(),2,',',' ');?>€</td>
                    </tr>
                    <tr>
                        <td>Livraison</td>
                        <td id="livr"><?=number_format($livreson = 5,2,',',' ');?>€</td>
                    </tr>
                    <tr>
                        <td>Total de la commande</td>
                        <td id="tot_com"><?=number_format($panier->totallivreson($livreson),2,',',' ');?>€</td>
                    </tr>                 
                    <tr>
                        <td><input type="button" value="Acheter" onclick="function go()"></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
    <?php $_SESSION['prixtotal'] = $panier->totallivreson($livreson)?>
    <?php require '../footer/footer.php'; ?>
    <link rel="stylesheet" href="../footer/footer_style.css">
    <script>
        var btn = document.querySelector("input");
        btn.addEventListener("click", updateBtn);
        function updateBtn() {
            alert("Vous devez vous connectez !");
            document.location.href="http://localhost/unsold/connexion/formulaire.php";
        }
    </script>

    </script>
</body>
      
</html>