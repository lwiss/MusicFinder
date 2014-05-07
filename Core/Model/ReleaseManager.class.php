<?php

/**
 * @access public
 * @author lwiss
 */
class ReleaseManager
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
	
	public function getReleaseByName($name) {
		$requete = $this->db->prepare("select * from release  where name like '%:name%' ");
		$requete->bindValue(':name', (String) $name, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$Releases []= new Release($donnees);
		return $Releases;
	}
	
	
}

?>