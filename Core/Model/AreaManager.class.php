<?php

/**
 * @access public
 * @author lwiss
 */
class AreaManager
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
	
	public function getAreaByID ($id) {
		$requete = $this->db->prepare("select * from area where aid=:id");
		$requete->bindValue(':id', (int) $id, PDO::PARAM_INT);
		$requete->execute();
		$donnees= $requete->fetch(PDO::FETCH_ASSOC);
		return new Area($donnees);
	}
	
	
}

?>