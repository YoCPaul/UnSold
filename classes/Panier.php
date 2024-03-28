<?php
class panier{
    public function __construct(){
        if(!isset($_SESSION)){
            header("../index/index.php");
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }

    
    }

    public function add($chaussure_id){
        if(isset($_SESSION['panier'] [$chaussure_id ])){
            $_SESSION['panier'] [$chaussure_id ]++;
        }else{
            $_SESSION['panier'] [$chaussure_id ]= 1;
        }
    }

    public function del($pro){
        unset($_SESSION['panier'][$pro]);
    }

    public function total(){
        $total = 0;
        $idk = array_keys($_SESSION['panier']);
        $bdd = new Mysql;
        $bdd->set_serveur("localhost");
        $bdd->set_login("root");
        $bdd->set_bdd("tpl3info");
        $bdd->__construct();
        $sql = ('SELECT id ,prix FROM CHAUSSURE WHERE id IN ('.implode(',',$idk).')');
        $chaussurep = $bdd->requete($sql);
        foreach($chaussurep as $chaussure){
            $total += $chaussure['prix']*$_SESSION['panier'][$chaussure['id']];
        }
        return $total;
    }

    public function totallivreson($livreson){
        $total = 0;
        $idk = array_keys($_SESSION['panier']);
        $bdd = new Mysql;
        $bdd->set_serveur("localhost");
        $bdd->set_login("root");
        $bdd->set_bdd("tpl3info");
        $bdd->__construct();
        $sql = ('SELECT id ,prix FROM CHAUSSURE WHERE id IN ('.implode(',',$idk).')');
        $chaussurep = $bdd->requete($sql);
        foreach($chaussurep as $chaussure){
            $total += $chaussure['prix']*$_SESSION['panier'][$chaussure['id']];
        }
        return $total+$livreson;
    }
}
?>