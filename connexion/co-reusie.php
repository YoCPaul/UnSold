<?php 
include("../inc/connexion.php");


$bdd->__construct();
if (isset($_POST['ok'])) {
    if(!empty($_POST['email'])AND !empty($_POST['mdp'])){
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $recupUser = $bdd->prepare('SELECT * FROM utilisateur');
        $recupUser->execute(array($email, $mdp));
        //var_dump($email);
        //var_dump($recupUser->fetch());
        foreach($recupUser as $user){
            if ($email = $user['mail']) {
                var_dump($user['mdp']);
                //$hash = $user['mdp'];
                //echo $hash;
                //var_dump(password_verify($mdp, $hash));
                //var_dump(password_hash($_POST['mdp'],PASSWORD_DEFAULT));
                if(password_verify($mdp, $user['mdp'])){
                    // Récupère le prénom de l'utilisateur depuis le résultat de la première requête
                    $prenom = $user['prenom'];
                    // Redirige l'utilisateur vers une autre page avec le nom d'utilisateur en tant que paramètre
                    session_start();
                    $_SESSION['utilisateur'] = $prenom;
                    header("Location: http://localhost/unsold/index/index_co.php");
                    //echo"reussi<br>";
                    exit;
                }else{
                    // Si l'utilisateur n'est pas connecté, redirige-le vers la page de connexion
                    header("Location: http://localhost/unsold/connexion/formulaire.php?erreur=1");
                    //exit;
                    echo"mdp<br>";
                }
            }
        
        }
    }
}

            



?>