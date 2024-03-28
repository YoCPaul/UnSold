<?php

$servername = "localhost";
$username = "root";
$password = "";



class Utilisateur
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $d_naissance;
    private $_mail;
    private $_mdp;
    private $_adresse;

    public function set_adresse($s){
        if (strlen($s) == 0) exit("Utilisateur : l'adresse est obligatoire");
            $this->set_adresse = $s;
    }


    public function set_nom($s)
    {
        if (strlen($s) == 0) exit("Utilisateur : le nom est obligatoire");
            $this->_nom = $s;
    }

    public function set_prenom($s)
    {
        if (strlen($s) == 0) exit("Utilisateur : le nom est obligatoire");
            $this->_prenom = $s;
    }


    public function set_mail($s)
    {
        if ((strlen($s) < 0 )||(strlen($s) > 50 )) exit("Utilisateur : le @ est obligatoire");
            $this->_mail = $s;
    }

    public function set_mdp($s)
    {
        if (strlen($s) == 0) $s = "1234";
        
        else if ((strlen($s) < 4 )||(strlen($s) > 255 )) exit("Utilisateur : le mdp doit être compris entre 4 et 15 caractères");
            else
                $this->_mdp = $s;
    }
    
    public function set_dnaissance($s) // format d'entrés : jj/mm/aaaa
    {
        $this->d_naissance = $s;
    }

    public function set_id($x)
    {
        $this->_id = $x;
    }

    public function enregistrer(Mysql $bdd)
    {
        $q = "INSERT INTO utilisateur (id, nom, prenom ,d_naissance ,mail ,mdp ,adresse)
                VALUES (
                    null, 
                    '$this->_nom', 
                    '$this->_prenom',
                    '$this->d_naissance',
                    '$this->_mail',
                    '$this->_mdp',
                    '$this->_adresse')";
        return $bdd->requete($q);
    }

    public function supprimer(Mysql $bdd)
    {
        $q = "DELETE FROM utilisateur WHERE id = $this->_id ";
        return $bdd->requete($q);
    }

    public function get_id()
    { 
        return $this->_id; 
    }

    public function get_nom()
    { 
        return $this->_nom;  
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }
    
    public function getd_naissance() 
    {
        return $this->d_naissance;   
    }

    public function get_mail()
    {
        return $this->_mail;   
    }

    public function get_mdp()
    {
        return $this->_mdp;
    }
    
    public function get_adresse()
    {
        return $this->_adresse;
    }

    public static function get_un($bdd, $id){
    $q = "SELECT * FROM utilisateur WHERE id = :id";
    $stmt = $bdd->prepare($q);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $u = new Utilisateur;
        $u->set_dnaissance($row['d_naissance']);
        $u->set_id($row['id']);
        $u->set_mail($row['mail']);
        $u->set_prenom($row['prenom']);
        $u->set_nom($row['nom']);
        $u->set_mdp($row['mdp']);
        $u->set_adresse($row['adresse']);
        return $u;
    } else {
        return null; // L'utilisateur avec l'ID spécifié n'a pas été trouvé
    }
        return $u;
    }

    
    public static function get_liste(Mysql $bdd, $order_by = 'id', $order_type = 'ASC')
    {
        $q = "SELECT * FROM utilisateur ORDER BY $order_by $order_type";
        $r = $bdd->requete($q);
        $us = array();

    while ($row = $r->fetch(PDO::FETCH_ASSOC)) {
        $u = new Utilisateur();
            $u->set_id($row['id']);
            $u->set_nom($row['nom']);
            $u->set_prenom($row['prenom']);
            $u->set_dnaissance($row['d_naissance']);
            $u->set_mail($row['mail']);
            $u->set_mdp($row['mdp']);
            $u->set_adresse($row['adresse']);
        $us[] = $u;
    }

    return $us;
    }

    public function modifier(Mysql $bdd)
    {
        if ($this->_id) {
            $q = "UPDATE utilisateur SET nom = '" . $this->_nom . "', prenom = '" . $this->_prenom . "', d_naissance = '" . $this->_d_naissance . "', mail = '" . $this->_mail . "' WHERE id = " . $this->_id;
            return $bdd->requete($q);
        }
        return false; // Retourne false si l'identifiant est manquant.
    }

    public function charger(Mysql $bdd)
    {
        if ($this->_id) {
            $q = "SELECT * FROM utilisateur WHERE nom = " . $this->_nom;
            $res = $bdd->requete($q);

        if ($res) {
            $row = $res->fetch_assoc();
            $this->set_dnaissance($row['d_naissance']);
            $this->set_mail($row['mail']);
            $this->set_mdp($row['mdp']);
            $this->set_nom($row['nom']);
            $this->set_prenom($row['prenom']);

            return true; // Retourne true si les informations sont chargées avec succès.
        }
    }

   
}
}
   
?>