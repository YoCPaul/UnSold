<?php

class Chaussure{

    private $_id ;
    private $_nomch;
    private $_prix;
    private $_marque;
    private $_taille;
    private $_quantiter;
    private $_imag1;
    
    public function get_id()
    { 
        return $this->_id; 
    }

    public function get_nomch()
    { 
        return $this->_nomch;  
    }

    public function get_imag1(){
        return $this->_imag1;
    }
    public function get_imag2(){
        return $this->_imag2;
    }
    public function get_imag3(){
        return $this->get_imag3;
    }
    public function get_imag4(){
        return $this->_imag4;
    }
    public function get_imag5(){
        return $this->_imag5;
    }


    public static function get_liste(Mysql $bdd, $order_by = 'id', $order_type = 'ASC')
    {
        $q = "SELECT * FROM chaussure ";
        $r = $bdd->requete($q);
        $us = array();

    while ($row = $r->fetch(PDO::FETCH_ASSOC)) {
        $u = new Chaussure();
            $u->set_id($row['id']);
            $u->set_nomch($row['nom']);
            $u->set_prix($row['prix']);
            $u->set_marque($row['marque']);
            $u->set_taille($row['taille']);
            $u->set_quantiter($row['quantiter']);
            $u->set_imgsrc($row['imag1']);
            $u->set_imgsrc($row['imag2']);
            $u->set_imgsrc($row['imag3']);
            $u->set_imgsrc($row['imag4']);
            $u->set_imgsrc($row['imag5']);
        $us[] = $u;
    }

    return $us;
    }

}

?>