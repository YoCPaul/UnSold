<?php
class Mysql
{
	/*
	private $_serveur = "localhost";
	private $_login;
	private $_mdp;
	private $_bdd;
	private $conn;
	*/

	private $host = 'localhost';
    private $db_name = 'TPL3INFO';
    private $username = 'root';
    private $password = '';
    private $conn;


	public function set_serveur($s)
	{
		$this->_serveur = $s;
	}

	public function set_login($s)
	{
		$this->_login = $s;
	}

	public function  set_mdp($s)
	{
		$this->_mdp = $s;
	}

	public function set_bdd ($s)
	{
		$this->_bdd = $s;
	}

	/*
	public function get_cnx()
	{
		return $this->_cnx;
	}

	public function connexion()
	{
		$this->_cnx = mysqli_connect($this->_serveur, $this->_login, $this->_mdp , $this->_bdd);
		if (!$this->_cnx)
			exit("Erreur de connexion bdd : " . mysqli_error());
	}

	public function requete($q)
	{
		$res = Mysqli_query($q);
		if (!$res) exit("<pre>Erreur dans la requete [$q] : " . mysqli_error() . "</pre>");
		return $res->query();
	}
	*/
	public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit("Erreur de connexion à la base de données : <br>" . $e->getMessage());
        }
    }

    // Méthode pour préparer la requête
    public function prepare($query)
    {
        return $this->conn->prepare($query);
    }

    // Méthode pour exécuter la requête
    public function requete($query)
    {
        return $this->conn->query($query);
    }

    public function deconnexion()
    {
        $this->conn = null;
    }
}
?>