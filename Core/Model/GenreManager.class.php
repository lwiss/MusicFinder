<?php

/**
 * @access public
 * @author lwiss
 */
class GenreManager
{
	private $db;
	
	public function __construct($db)
	{
		$this->db = $db;
	}
	
	public function getDb(){
		return $this->db;
	}

	public function setDb($db)
	{
		$this->db = $db;
	}
	
	
	public function getGenreByName ($name) {
		$requete = $this->db->prepare("select * from genre where gname like '%:name%'");
		$requete->bindValue(':name', (String) $name, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$genres []= new Genre($donnees);
		return $genres;
	}
	
	
}

?>