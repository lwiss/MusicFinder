<?php

/**
 * @access public
 * @author lwiss
 */
class ArtistManager
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
	
	public function getArtistByName ($name) {
		$requete = $this->db->prepare("select * from artist where aname like '%:name%'");
		$requete->bindValue(':name', (String) $name, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$artists []= new Artist($donnees);
		return $artists;
	}
	
	
}

?>