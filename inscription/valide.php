<?php
session_start();
$_SESSION['utilisateur'] = $_POST['prenom'];

include("../inc/connexion.php");

if (!class_exists('Utilisateur')) {
    include '../classes/Utilisateur.php';
}

if (isset($_POST['ok'])) {
    $u = new Utilisateur();
    $u->set_nom($_POST['nom']);
    $u->set_prenom($_POST['prenom']);
    $u->set_mail($_POST['mail']);
    $u->set_dnaissance($_POST['d_naissance']);
    $u->set_mdp(password_hash($_POST['mdp'],PASSWORD_DEFAULT));
    $u->set_adresse($_POST['adresse']);
    if ($u->enregistrer($bdd)) {
        header("Location: http://localhost/unsold/index/index_co.php?username=" . urlencode($_POST['prenom']));
    }
}
?>
